<nav class="site-nav">
<ul class="site-nav-list">


	<li class="site-nav-item"><a class="site-nav-link" href="/" class="{{ request()->is('/') ? 'active' : '' }}">Samples</a></li>

{{-- @if (Route::has('about')) --}}
	<li class="site-nav-item"><a class="site-nav-link" href="/about" class="{{ request()->is('about') ? 'active' : '' }}">Products</a></li>           
{{-- @endif --}}



{{-- <li class="site-nav-item site-nav-brand"><a class="site-nav-link" href="/" class="{{ request()->is('index') ? 'active' : '' }}">@include ('partials.logo')
	<span class="sr-only">Salonpas&reg; It&rsquo;s Good Medicine</span></a></li>         --}}

<li class="site-nav-item"><a class="site-nav-link" href="/about" class="{{ request()->is('about') ? 'active' : '' }}">Clinical Trials &amp; Studies</a></li>     


</ul>

</nav>