<nav>
<ul>


	<li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>

{{-- @if (Route::has('about')) --}}
	<li><a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>           
{{-- @endif --}}


</ul>

</nav>