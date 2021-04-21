

{{-- @extends('layouts.app' ) --}}
{{-- @extends('layouts.app', ['title' => 'page title']) --}}
{{-- <x-main-layout title="Home" page="home"> --}}

	{{-- @extends('layouts.app', ['title' => $title, 'description' => $description, 'page' => $page]) --}}
	@extends('layouts.app')

@section('content')

<h1>Hi {{$title ?? ''}}</h1>
<div class="container">
	<div class="row">
		<div class="col">
			{{-- @extends('layouts.main',  $title) --}}
		</div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.container -->

@endsection

{{-- </x-main-layout> --}}
