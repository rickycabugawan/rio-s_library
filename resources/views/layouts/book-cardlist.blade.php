<div class="book-carousel card my-3">
  <div class="card-header text-light">
    {{ $title }}
  </div>
  <div class="card-body px-5">
	@if (count($data) > 0)
	<div class="row">
	    @foreach($data as $book)
    		<div class="book col-2 p-0 mx-2">
			  <div class="p-0 text-center">
			    <a href="{{action('BookController@show',['id' => $book->id])}}"><img class="img-fluid book__img" src="" data-lazy="{{ asset('img/cover/')."/".$book->imageURL}}"></a>
			    <a href="#" class="btn btn-sm {{$btnclass}} book__btn mt-3">{{$btntext}}</a>
			  </div>
			</div>
    	@endforeach
    </div>
	@else
	   <div class="empty text-center">
		  <h1>No records!</h1>
		</div>
	@endif
    	
  </div>
</div>