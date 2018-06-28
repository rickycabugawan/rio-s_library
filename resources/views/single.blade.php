@extends('layouts.template')

@section('content')

<div class="card book-info">
  <div class="card-header text-light">
    Book Information
  </div>
  <div class="card-body p-5">
  	<div class="row">
  		<div class="col-9">
		    <h2 class="card-title">Title of the Book</h2>
		    <p class="card-text">By: <a href="" class="text-secondary">Author</a></p>
		    <p class="card-text">Genre: <a href="" class="text-secondary">Horror</a></p>
		    <p class="card-text">Library Section: <a href="" class="text-secondary">Fiction</a></p>
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
	    	<img class="img-fluid book__img" src="{{asset('img/01.jpg')}}">
	    	<a href="#" class="btn btn-primary book-info__borrow-btn mt-3">Borrow</a>
	    	<a href="#" class="btn btn-warning book-info__borrow-btn mt-3">Add to Favorites</a>
	    	<a href="#" class="btn btn-danger book-info__borrow-btn mt-3">Remove Book</a>
	    </div>
    </div>
  </div>
</div>

@include('layouts.book-cardlist', [
  'title'=> 'You might also like', 
  'data'=>5, 
  'class'=>'recently-returned',
  'btnclass'=>'btn-primary borrow',
  'btntext'=>'Borrow'
  ])

@endsection