@extends('layouts.template')

@section('content')

@include('layouts.book-cardlist', [
  'title'=> 'Most Popular', 
  'data'=>5, 
  'class'=>'most-popular',
  'btnclass'=>'btn-primary borrow',
  'btntext'=>'Borrow'
  ])

@include('layouts.book-cardlist', [
  'title'=> 'Recently Returned', 
  'data'=>5, 
  'class'=>'recently-returned',
  'btnclass'=>'btn-primary borrow',
  'btntext'=>'Borrow'
  ])

<div class="book-carousel by genre card my-3">
  <div class="card-header text-light">
  	<span>By Genre</span>
  	 <span class="float-right"><a href="" class="text-light">Browse All Genre ></a></span>
  </div>
  <div class="card-body px-5">
  	@include('layouts.book-list', ['title'=> 'Horror', 'data'=>7])
  	@include('layouts.book-list', ['title'=> 'Romance', 'data'=>7])
  	@include('layouts.book-list', ['title'=> 'Fantasy', 'data'=>7])
  	@include('layouts.book-list', ['title'=> 'Thriller', 'data'=>7])
  </div>
</div>

@endsection