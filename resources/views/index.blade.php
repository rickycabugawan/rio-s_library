@extends('layouts.template')

@section('content')

@include('layouts.book-cardlist', [
  'title'=> 'Most Popular', 
  'data'=> $data->where('isBorrowed',0)->sortByDesc('timesBorrowed'),
  'class'=>'most-popular',
  'btnclass'=>'btn-primary borrow',
  'btntext'=>'Borrow'
  ])

@include('layouts.book-cardlist', [
  'title'=> 'Recently Returned', 
  'data'=>$data->where('isBorrowed',0)->sortByDesc('updated_at'), 
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

    @foreach($genres->random(3) as $genre)
      @include('layouts.book-list', [
        'title'=> $genre->genre, 
        'data'=>$data->where('genre',$genre->genre),
        'btnclass'=>'btn-primary borrow',
        'btntext'=>'Borrow'
        ])
    @endforeach
  </div>
</div>

<div class="book-carousel by genre card my-3">
  <div class="card-header text-light">
    <span>By Library Section</span>
     <span class="float-right"><a href="" class="text-light">Browse All Library Section ></a></span>
  </div>
  <div class="card-body px-5">

    @foreach($sections->random(3) as $section)
      @include('layouts.book-list', [
        'title'=> $section->section, 
        'data'=>$data->where('library_section',$section->section),
        'btnclass'=>'btn-primary borrow',
        'btntext'=>'Borrow'
        ])
    @endforeach
  </div>
</div>

@endsection