@extends('layouts.template')

@section('content')

<div class="card book-info">
  <div class="card-header text-light">
    Book Information
  </div>
  <div class="card-body p-5">
  	<div class="row">
  		<div class="col-9">
		    <h2 class="card-title">{{title_case($book->title)}}</h2>
		    <p class="card-text">By: <a href="" class="text-secondary">{{$book->author}}</a></p>
		    <p class="card-text">Genre: <a href="" class="text-secondary">{{$book->genre}}</a></p>
		    <p class="card-text">Library Section: <a href="" class="text-secondary">{{$book->library_section}}</a></p>
		    <p>Summary:</p>
		    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	    </div>
	    <div class="col-3 px-4 book-info__img-container">
	    	<div class="alert alert-primary" role="alert">
			  <div class="mb-2"><small>Borrowed {{$book->timesBorrowed}} times</small></div>
			  <small>Last Borrowed:<br> {{$book->updated_at->format("M j, Y, g:ia")}}</small>
			</div>
	    	<img class="img-fluid book-info__img" src="{{ asset('img/cover/')."/".$book->imageURL}}">
	    	<a href="#" class="btn btn-primary book-info__borrow-btn mt-3">Borrow</a>
	    	<a href="#" class="btn btn-warning book-info__borrow-btn mt-3">Add to Favorites</a>
	    	@auth
		    	@if(Auth::user()->isAdmin)
		    		<a href="#" class="btn btn-danger book-info__borrow-btn mt-3">Remove Book</a>
		    	@endif
		    @endauth
	    </div>
    </div>
  </div>
</div>

@include('layouts.book-cardlist', [
  'title'=> 'You might also like', 
  'data'=>$data->where('genre',$book->genre)->where('id','!=',$book->id),
  'class'=>'recently-returned',
  'btnclass'=>'btn-primary borrow',
  'btntext'=>'Borrow'
  ])

@endsection