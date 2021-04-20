@extends('layouts.app')

@section('banner')
<h1>My Blog</h1>
@endsection

@section('content')



@foreach ($posts as $post)

	<article class="{{ $loop->even ? 'class-name' : '' }}">
		<h2><a href="/posts/{{ $post->slug }}">{!! $post->title !!}</a></h2>

		<p>{!! $post->excerpt !!}</p>
	</article>
@endforeach



@endsection
