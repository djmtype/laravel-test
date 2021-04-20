<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	
	<header>
		@yield('banner')
	</header>
	
	@include('layouts.nav')

	@yield('content')

	<footer>
		@include('layouts.footer')
	</footer>
</body>
</html>