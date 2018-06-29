@extends('layouts.template')

@section('content')

@include('layouts.book-cardlist', [
  'title'=> 'Borrowed Books', 
  'data'=> $borrowed_books,
  'class'=>'borrowed-books',
  'btnclass'=>'btn-warning return-book',
  'btntext'=>'Return'
  ])

@include('layouts.book-cardlist', [
  'title'=> 'My Favorites', 
  'data'=> $favorite_books, 
  'class'=>'favorites',
  'btnclass'=>'btn-warning unfavorite-book',
  'btntext'=>'Unfavorite'
  ])

@endsection