{{-- @extends('layouts.app' ) --}}
{{-- @extends('layouts.app', ['title' => 'page title']) --}}
{{-- <x-main-layout title="Home" page="home"> --}}

{{-- @extends('layouts.app', ['title' => $title, 'description' => $description, 'page' => $page]) --}}
@extends('layouts.app')

@section('content')


<section class="section-slider">


<div class="container max-width-md">
	<div class="carousel">
		<div class="carousel-cell">
			
				<a href="#0" aria-label="Click here to get samples">
					<img src="{{ asset('img/slide-01.jpg') }}" alt="" width="1175" height="570" />
					<div class="carousel-description sr-only">
						<h2>Welcome Medical Professionals</h2>
						<p>A "Topicals First" approach to pain relief begins with Salonpas&reg;. Explore clinical studies and get samples for your patients here.</p>
						
					</div>
				</a>
		</div>
		<div class="carousel-cell">
			<a href="#0" aria-label="Click here to get samples">
				<img src="{{ asset('img/slide-01.jpg') }}" alt="" width="1175" height="570" />
				<div class="carousel-description sr-only">
					<h2>Welcome Medical Professionals</h2>
					<p>A "Topicals First" approach to pain relief begins with Salonpas&reg;. Explore clinical studies and get samples for your patients here.</p>
					
				</div>
			</a>
			
		</div>
		<div class="carousel-cell">
			<a href="#0" aria-label="Click here to get samples">
				<img src="{{ asset('img/slide-01.jpg') }}" alt="" width="1175" height="570" />
				<div class="carousel-description sr-only">
					<h2>Welcome Medical Professionals</h2>
					<p>A "Topicals First" approach to pain relief begins with Salonpas&reg;. Explore clinical studies and get samples for your patients here.</p>
					
				</div>
			</a>
		</div>

	</div>
</div><!-- /.container -->

</section><!-- /.hero -->

<div class="section section-xl">
		<div class="container max-width-md">
			<h3 class="txt-font-heading txt-color-primary">Salonpas<sup>&reg;</sup> It&rsquo;s Good Medicine</h3>

			<p>For over 80 years, Salonpas has delivered on our mission to improve people&rsquo;s quality of life through topical pain relief products. As a result, the widespread adoption of our products have made us the &ldquo;World&rsquo;s Number 1 Brand&rdquo; of topical pain patches1. Our family of patches, cream, roll-on, gel and spray are efficacious, readily available over-the-counter, safe and non-addictive. We call that Good Medicine and we hope you will, too. </p>
		</div><!-- /.container -->
</div><!-- /.section -->

@endsection

{{-- </x-main-layout> --}}