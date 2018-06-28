@extends('layouts.template')

@section('content')

<div class="card book-info">
  <div class="card-header text-light">
    Library Search
  </div>
  <div class="card-body px-3 py-4">
  	<div class="row">
  		<div class="col-3 filter-options border-right">
  			<input type="text" class="form-control form-control-sm" name="" placeholder="Title">
  			<input type="text" class="form-control form-control-sm" name="" placeholder="Author">
  			<div class="dropdown-divider"></div>
  			<small>Genre <a href="" class="float-right"><small>SELECT ALL</small></a></small>
  			@for($i=0;$i<8;$i++)
  			<div class="form-check">
			  <input class="form-check-input" type="checkbox" value="adventure" id="adventure" name="genre[]">
			  <label class="form-check-label" for="adventure">Adventure</label>
			</div>
			@endfor
			<div class="dropdown-divider"></div>
  			<small>Library Section <a href="" class="float-right"><small>SELECT ALL</small></a></small>
  			@for($i=0;$i<8;$i++)
  			<div class="form-check">
			  <input class="form-check-input" type="checkbox" value="adventure" id="adventure" name="genre[]">
			  <label class="form-check-label" for="adventure">Periodical Section</label>
			</div>
			@endfor
			<button class="btn btn-primary btn-sm mt-3">Search</button>
			<button class="btn btn-primary btn-sm">Reset</button>
  		</div>
  		<div class="col-9">
  			<div class="alert alert-primary" role="alert">
			  <div>Searched for Title: "Hello World"</div>
			  <div>Searched for Author: "Ricky"</div>
			</div>

			<div class="results">
				@for($i=0;$i<16;$i++)
				<div class="book">
				  <div class="p-0 text-center">
				    <a href=""><img class="img-fluid book__img" src="{{asset('img/01.jpg')}}"></a>
				    <small>The Enormous Crocodile</small>
				    <small>By: Author</small>
				  </div>
				</div>
				@endfor
			</div>		
  		</div>
  	</div>
  </div>
</div>

@endsection