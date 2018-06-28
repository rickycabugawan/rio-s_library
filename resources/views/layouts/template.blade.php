<!DOCTYPE html>
<html>
<head>
	<title>Rio's Library</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	{{-- Styles --}}
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/slick.css') }}" rel="stylesheet">
	<link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	
</head>
<body>
	<div class="top-bar text-light px-4 py-1">
		<div class="topbar-container container-fluid">
			<span>Welcome, 
				@auth
					{{ ucfirst(Auth::user()->name) }}
				@else
					Guest
				@endauth
			</span>


			 	@guest
					<span class="float-right">
						<a class="text-light" href="{{ route('login') }}">Login</a>
						<span class="mx-2">|</span>
						<a class="text-light" href="{{ route('register') }}">Register</a>
					</span>
				@else

					<span class="float-right">
						<a class="text-light" href="{{ route('logout') }}" onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">Logout</a>
					</span>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
				@endguest
		</div>
	</div>
	<main class="main-container container-fluid">
		@include('layouts.navbar')
		@yield('content')
	</main>
	<div class="container-fluid footer text-center py-2">
		<hr>
		<span>&copy Copyright 2018 Rio's Library | <a href="" class="text-dark">Disclaimer</a></span>
	</div>
	{{-- Scripts --}}
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('js/slick.min.js') }}"></script>
	<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>