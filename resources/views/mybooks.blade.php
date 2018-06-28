@extends('layouts.template')

@section('content')

@include('layouts.book-cardlist', [
  'title'=> 'Borrowed Books', 
  'data'=>5, 
  'class'=>'borrowed-books',
  'btnclass'=>'btn-warning return',
  'btntext'=>'Return'
  ])

@include('layouts.book-cardlist', [
  'title'=> 'My Favorites', 
  'data'=>5, 
  'class'=>'favorites',
  'btnclass'=>'btn-primary borrow',
  'btntext'=>'Borrow'
  ])

@endsection