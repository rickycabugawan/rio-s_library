<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Book;
use App\Genre;
use App\LibrarySection;
use App\FavoriteBook;
use App\User;
use Auth;

class BookController extends Controller
{
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $genres = Genre::all();
        $sections = LibrarySection::all();

       
        $books = DB::table('books')
                        ->where('title','like','%'.$request->input('title').'%')
                        ->where('author','like','%'.$request->input('author').'%')
                        ->where('isBorrowed',0)
                        ->get();
        if($request->has('genre')){
            $books = $books->whereIn('genre',$request->input('genre'));
        }

        if($request->has('section')){
            $books = $books->whereIn('library_section',$request->input('section'));
        }

        return view('search', compact('books','genres','sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        $sections = LibrarySection::all();
     
        return view('add',compact('genres','sections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->genre = $request->genre;
        $book->library_section = $request->library_section;
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $book->imageURL = $imageName;
        $book->save();
        $request->image->move(public_path('/img/cover'), $imageName);

        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        $data = Book::all();
        $genres = Genre::all();
        $sections = LibrarySection::all();
        return view('single',compact('data','book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $book = Book::find($request->book_id);
        $title = $book->title;
        $delete = Book::find($book->id);
        $delete->delete();
        return "Successfully deleted:\n".title_case($title);
    }

    /**
     * Display a listing of borrowed books and favorites.
     *
     * @return \Illuminate\Http\Response
     */
    public function mybooks()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $data = Book::all();
        $borrowed_books = $data->where('borrowedBy',$id);
        $favorite_books_all = FavoriteBook::all();
        $favorite_books_id = $favorite_books_all->where('user_id',$id)->pluck('book_id');
        $favorite_books = $data->whereIn('id',$favorite_books_id);
        return view('mybooks',compact('borrowed_books','favorite_books'));
    }

    /**
     * Borrow a book.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function borrow(Request $request)
    {
        if(Auth::check()) {
            $id = Auth::user()->id;
            $book = Book::find($request->book_id);
            $book->borrowedBy = $id;
            $book->isBorrowed = 1;
            $book->timesBorrowed += 1;
            $book->save();
            return "Successfully borrowed:\n".title_case($book->title);
        }
        else {
            return 'You must be logged in to borrow books!';
        }
  
    }

    /**
     * Return a book.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function return(Request $request)
    {
        if(Auth::check()) {
            $id = Auth::user()->id;
            $book = Book::find($request->book_id);
            $book->borrowedBy = null;
            $book->isBorrowed = 0;
            $book->save();
            return "Successfully returned:\n".title_case($book->title);
        }
        else {
            return 'You must be logged in to return books!';
        }
  
    }

    /**
     * Add book to favorite.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function favorite(Request $request)
    {
        if(Auth::check()) {
            $id = Auth::user()->id;
            $book = Book::find($request->book_id);
            $book_id = $request->book_id;
            $favorite = new FavoriteBook;
            $favorite->user_id = $id;
            $favorite->book_id = $book_id;
            $favorite->save();
            return "Added to favorite:\n".title_case($book->title);
        }
        else {
            return 'You must be logged in to favorite books!';
        }
    }

    /**
     * Remove book to favorite.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function unfavorite(Request $request)
    {
        if(Auth::check()) {
            $id = Auth::user()->id;
            $book = Book::find($request->book_id);
            $book_id = $request->book_id;
            $favorites = FavoriteBook::where('book_id', $book_id)->where('user_id', $id);       
            $favorites->delete();
            return "Removed from favorite:\n".title_case($book->title);
        }
        else {
            return 'You must be logged in to favorite books!';
        }
    }
}
