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
	{{-- Scripts --}}
	<script src="{{ asset('js/jquery.min.js') }}" defer></script>
	<script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
	<script src="{{ asset('js/slick.min.js') }}" defer></script>
	<script src="{{ asset('js/script.js') }}" defer></script>
</head>
<body>
	<div class="top-bar text-light px-4 py-1">
		<div class="topbar-container container-fluid">
			<span>Welcome, Guest</span>
			<span class="float-right">
				<a class="text-light" href="">Login</a>
				<span class="mx-2">|</span>
				<a class="text-light" href="">Register</a>
			</span>
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
</body>
</html>