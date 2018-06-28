@extends('layouts.template')

@section('content')

@include('layouts.book-cardlist', [
  'title'=> 'Borrowed Books', 
  'data'=> $data->whereIn('id', $borrowed_books_id),
  'class'=>'borrowed-books',
  'btnclass'=>'btn-warning return',
  'btntext'=>'Return'
  ])

@include('layouts.book-cardlist', [
  'title'=> 'My Favorites', 
  'data'=> $favorite_books_id, 
  'class'=>'favorites',
  'btnclass'=>'btn-primary borrow',
  'btntext'=>'Borrow'
  ])

@endsection