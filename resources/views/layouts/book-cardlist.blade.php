<div class="book-carousel card my-3">
  <div class="card-header text-light">
    {{ $title }}
  </div>
  <div class="card-body px-5">
    
	@if ($data > 0)
	<div class="row">
	    @for($i=0;$i<7;$i++)
    		<div class="book col-2 p-0 mx-2">
			  <div class="p-0 text-center">
			    <a href=""><img class="img-fluid book__img" src="{{asset('img/01.jpg')}}"></a>
			    <a href="#" class="btn btn-sm {{$btnclass}} book__btn mt-3">{{$btntext}}</a>
			  </div>
			</div>
    	@endfor
    </div>
	@else
	   <div class="empty text-center">
		  <h1>No records!</h1>
		</div>
	@endif
    	
  </div>
</div>