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
						<p>A "Topicals First" approach to pain relief begins with Salonpas&reg;. Explore clinical studies and get
							samples for your patients here.</p>

					</div>
				</a>
			</div>
			<div class="carousel-cell">
				<a href="#0" aria-label="Click here to get samples">
					<img src="{{ asset('img/slide-01.jpg') }}" alt="" width="1175" height="570" />
					<div class="carousel-description sr-only">
						<h2>Welcome Medical Professionals</h2>
						<p>A "Topicals First" approach to pain relief begins with Salonpas&reg;. Explore clinical studies and get
							samples for your patients here.</p>

					</div>
				</a>

			</div>
			<div class="carousel-cell">
				<a href="#0" aria-label="Click here to get samples">
					<img src="{{ asset('img/slide-01.jpg') }}" alt="" width="1175" height="570" />
					<div class="carousel-description sr-only">
						<h2>Welcome Medical Professionals</h2>
						<p>A "Topicals First" approach to pain relief begins with Salonpas&reg;. Explore clinical studies and get
							samples for your patients here.</p>

					</div>
				</a>
			</div>

		</div>
	</div><!-- /.container -->

</section><!-- /.hero -->

<div class="section section-xl flow-v-xl">
	<div class="container max-width-md flow-v-sm">
		<h3 class="txt-heading txt-primary">Salonpas<sub>&reg;</sub> It&rsquo;s Good Medicine</h3>

		<p>For over 80 years, Salonpas<sub>&reg;</sub> has delivered on our mission to improve people&rsquo;s quality of life through
			topical pain relief products. As a result, the widespread adoption of our products have made us the
			&ldquo;World&rsquo;s Number 1 Brand&rdquo; of topical pain patches<sup id="fnref-1"><a href="#fn-1" class="footnote-ref">1</a></sup>. Our family of patches, cream, roll-on, gel
			and spray are efficacious, readily available over-the-counter, safe and non-addictive. We call that Good Medicine
			and we hope you will, too. </p>
	</div><!-- /.container -->

	<div class="container">
		<div class="row">
			<div class="sm:col-6">
				<div class="card card-body flow-v-lg">

					<div class="card-content">
						<div class="card-thumb">
							<img class="card-img" src="{{ asset('img/card-samples.jpg') }}" alt="Salonpas&reg; patches" width="165"
									 height="165" loading="lazy">
						</div><!-- /.card-thumb -->
						<div class="card-summary flow-v-sm">

							<h3 class="txt-primary">FREE Samples</h3>

							<p>Box of 24, single-pack, sachets of Salonpas Pain Relief Patch for mild to moderate acute non-low back
								musculoskeletal pain.</p>
						</div><!-- /.card-summary -->
					</div><!-- /.card-content -->

					<a class="btn btn-secondary-outline" href="#0">Get samples</a>
				</div><!-- /.card -->
			</div><!-- /.col -->

			<div class="sm:col-6">
				<div class="card card-body flow-v-lg">

					<div class="card-content">
						<div class="card-thumb">
							<img class="card-img" src="{{ asset('img/card-products.jpg') }}" alt="Salonpas&reg; product line-up"
									 width="165" height="165" loading="lazy">
						</div><!-- /.card-thumb -->
						<div class="card-summary flow-v-sm">

							<h3 class="txt-primary">Our Products</h3>
							<p>Salonpas<sub>&reg;</sub> offers a number of specialized forms and active ingredients,
								including NSAIDs and Lidocaine.</p>
						</div><!-- /.card-summary -->
					</div><!-- /.card-content -->
					<a class="btn btn-secondary-outline" href="#0">Learn more</a>
				</div><!-- /.card -->
			</div><!-- /.col -->


			<div class="sm:col-6">
				<div class="card card-body flow-v-lg">

					<div class="card-content">
						<div class="card-thumb">
							<img class="card-img" src="{{ asset('img/card-trials.jpg') }}" alt="Researcher performing testing"
									 width="165" height="165" loading="lazy">
						</div><!-- /.card-thumb -->
						<div class="card-summary flow-v-sm">

							<h3 class="txt-primary">Clinical Studies &amp; Guidelines</h3>
							<p>See our clinical proof and the alignment our products have to guidance from learned intermediaries.</p>
						</div><!-- /.card-summary -->
					</div><!-- /.card-content -->
					<a class="btn btn-secondary-outline" href="#0">Learn more</a>
				</div><!-- /.card -->
			</div><!-- /.col -->

		</div><!-- /.row -->

		<div class="row flow-md">
		<div class="col-12">

			<ol>
				<li id="fn-1" class="h6">
					
				<p>Euromonitor International Limited: in terms of retail sales value in 2019, based on the custom research conducted in March-April 2020 in the countries that account for more than 70% share of the global topical analgesics/anesthetic market in 2019. <a href="#fnref-1" class="footnote-backref">↩</a></p>
				
				</li>
				</ol>


		</div><!-- /.col-12 -->	
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /.section -->

@endsection

{{-- </x-main-layout> --}}