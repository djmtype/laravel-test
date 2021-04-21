<!DOCTYPE html>
<html lang="en">

<head>

	<title>{{ $title }}</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
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