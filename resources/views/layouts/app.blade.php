<!DOCTYPE html>
<html lang="en">

<head>

	@if($page == 'home')
	<title>Salonpas</title>
	@else
	<title>{{ uc($title) }} | Salonpas&reg;</title>
	@endif

	@include('partials.meta')

	<link rel="stylesheet" href="{{ asset('css/app.css') }}">

	{{-- @include('partials.meta') --}}
</head>

<body>

	<div class="heading">
		@yield('banner')
	</div><!-- /.heading -->



	@include ('partials.header')



	@yield('content')

	<footer>
		@include('partials.footer')
	</footer>
</body>

</html>