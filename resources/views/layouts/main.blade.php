<!doctype html>

<html class="no-js" lang="en-US">

<head>
	

	<title>{{ $title }}</title>
	@include('partials.meta')




	<link rel="stylesheet" href="{{ asset('css/app.css') }}">





	<script defer src="{{ mix('js/app.js') }}"></script>

	<!-- Head Script -->

</head>

<body>

	{{--@include('partials.promoNotification')--}}



	<header>
		@include('partials.header')
	</header>

	{{ $slot }}


	@include('partials.footer')


</body>

</html>