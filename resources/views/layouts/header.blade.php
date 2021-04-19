<nav>
<ul>
	<li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
	<li><a href="/about" class="{{ request()->is('about/*') ? 'active' : '' }}">About</a></li>
</ul>

</nav>