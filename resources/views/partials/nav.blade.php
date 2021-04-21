<nav class="site-nav">
<ul class="site-nav-list">


	<li class="site-nav-item"><a class="site-nav-link" href="/" {{ request()->is('/') ? 'aria-current="page"' : '' }}>Samples</a></li>

{{-- @if (Route::has('about')) --}}
	<li class="site-nav-item"><a class="site-nav-link" href="/about" {{ request()->is('about') ? 'aria-current="page"' : '' }}>Products</a></li>           
{{-- @endif --}}



{{-- <li class="site-nav-item site-nav-brand"><a class="site-nav-link" href="/" {{ request()->is('index') ? 'aria-current="page"' : '' }}>@include ('partials.logo')
	<span class="sr-only">Salonpas&reg; It&rsquo;s Good Medicine</span></a></li>         --}}

<li class="site-nav-item"><a class="site-nav-link" href="/about" {{ request()->is('about') ? 'aria-current="page"' : '' }}>Clinical Trials &amp; Studies</a></li>     


</ul>

</nav>