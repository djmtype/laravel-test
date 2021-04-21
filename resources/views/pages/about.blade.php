{{-- <x-main-layout title="About" page="about"> --}}
@extends('layouts.main', [
'title' => 'About',
'description' => 'Amazing description',
'page' => 'about'
])
@section('content')
<div class="container">
	<div class="row">


		<div class="xs:col-12 sm:col-6">
	
			<ul>
				<li>Item One with a long sentence</li>
				<li>Item One</li>
				<li>Item One</li>
			</ul>

		</div>


		<div class="xs:col-12 sm:col-6">lkahd</div>

	</div>
</div><!-- /.container -->
<h1>{{ $path ?? '' }}</h1>

@endsection

{{-- </x-main-layout> --}}