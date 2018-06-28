<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Genre;
use App\LibrarySection;
use App\BorrowedBook;
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
    public function search()
    {
         return view('search');
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
        //
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
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }

    /**
     * Display a listing of borrowed books and favorites.
     *
     * @return \Illuminate\Http\Response
     */
    public function mybooks()
    {
        $id = Auth::user()->id;
        $data = Book::all();
        $borrowed_books = BorrowedBook::all();
        $favorite_books = FavoriteBook::all();
        $borrowed_books_id = $borrowed_books->where('user_id', $id)->book_id;
        $favorite_books_id = $favorite_books->where('user_id', $id)->book_id;

        return view('mybooks', compact('borrowed_books_id','favorite_books_id','data'));
    }
}
