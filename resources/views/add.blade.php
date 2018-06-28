@extends('layouts.template')

@section('content')

<div class="card book-info">
  <div class="card-header text-light">
    Add Book
  </div>
  <div class="card-body p-5">
  	<form class="form-group row" action="{{action('BookController@store')}}" method="POST">
  		@csrf
		<label for="title" class="col-sm-2 col-form-label my-3">Book Title: </label>
		<div class="col-sm-10 my-3">
			<input type="text" class="form-control" name="title" id="title" placeholder="Book Title">
		</div>

		<label for="author" class="col-sm-2 col-form-label my-3">Author: </label>
		<div class="col-sm-10 my-3">
			<input type="text" class="form-control" name="author" id="author" placeholder="Author">
		</div>

		<label for="genre" class="col-sm-2 col-form-label my-3">Genre: </label>
		<div class="col-sm-10 my-3">
			<select class="form-control" id="genre" name="genre">
				@foreach($genres as $genre)
					<option value="{{$genre->genre}}">{{$genre->genre}}</option>
				@endforeach
			</select>
		</div>

		<label for="section" class="col-sm-2 col-form-label my-3">Library Section: </label>
		<div class="col-sm-10 my-3">
			<select class="form-control" id="section" name="section">
				@foreach($sections as $section)
					<option value="{{$section->section}}">{{$section->section}}</option>
				@endforeach
			</select>
		</div>

		<label for="image" class="col-sm-2 col-form-label my-3">Book Cover: </label>
		<div class="col-sm-10 my-3">
			<input type="file" class="input-img form-control mb-4" id="image" name="image" accept=".png, .jpg, .jpeg">
			<img class="offset-2 col-6 preview-img img-fluid p-0 mb-4" src="{{asset('img/placeholder.png')}}">
		</div>
		<button type="submit" class="mx-auto btn btn-lg btn-success">Add Book</button>
	</form>
	
  </div>
</div>

@endsection