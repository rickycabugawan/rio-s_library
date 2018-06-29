@extends('layouts.template')

@section('content')

<div class="card book-info">
  <div class="card-header text-light">
    Library Search
  </div>
  <div class="card-body px-3 py-4">
  	<div class="row">
  		<form class="col-3 filter-options border-right">
  			<input type="text" class="form-control form-control-sm" name="title" value="{{ app('request')->input('title') }}" placeholder="Title">
  			<input type="text" class="form-control form-control-sm" name="author" value="{{ app('request')->input('author') }}"placeholder="Author">
  			<div class="dropdown-divider"></div>
  			<small>Genre <a href="" class="float-right select-all-genre"><small>SELECT ALL</small></a></small>

  			@foreach($genres as $genre)
  			<div class="form-check">
			  <input class="form-check-input genre-check" type="checkbox" value="{{$genre->genre}}" id="adventure" name="genre[]" 
			  @if (isset($_GET['genre']) && in_array($genre->genre,$_GET['genre']))
			  {{'checked'}}
			  @endif
			  >
			  <label class="form-check-label" for="adventure">{{$genre->genre}}</label>
			</div>
			@endforeach
			<div class="dropdown-divider"></div>
  			<small>Library Section <a href="" class="float-right select-all-section"><small>SELECT ALL</small></a></small>
  			@foreach($sections as $section)
  			<div class="form-check">
			  <input class="form-check-input section-check" type="checkbox" value="{{$section->section}}" id="adventure" name="section[]" 
			  @if (isset($_GET['section']) && in_array($section->section,$_GET['section']))
			  {{'checked'}}
			  @endif
			  >
			  <label class="form-check-label" for="adventure">{{$section->section}}</label>
			</div>
			@endforeach
			<button type="submit" class="btn btn-primary btn-sm mt-3">Search</button>
			<a href="/search" class="btn btn-primary btn-sm">Reset</a>
  		</form>
  		<div class="col-9">
  			<div class="alert alert-primary" role="alert">

  				@if (isset($_GET['title']) && $_GET['title']!="")
				  {!!"<div>Searched for Title: \"".$_GET['title']."\"</div>"!!}
				@endif

				@if (isset($_GET['author']) && $_GET['author']!="")
				  {!!"<div>Searched for Author: \"".$_GET['author']."\"</div>"!!}
				@endif
			</div>

			<div class="results">
				@if(count($books)>0)
					@foreach($books as $book)
					<div class="book">
					  <div class="p-0 text-center">
					    <a href="{{action('BookController@show',['id' => $book->id])}}"><img class="img-fluid book__img" src="{{ asset('img/cover/')."/".$book->imageURL}}"></a>
					    <small>{{ str_limit($book->title,20)}}</small><br>
					    <small>By: {{$book->author}}</small>
					  </div>
					</div>
					@endforeach
				@endif
			</div>		
  		</div>
  	</div>
  </div>
</div>

@endsection