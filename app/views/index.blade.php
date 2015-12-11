@include('_begin')

<header>
	@include('navbar')
</header>

<main class="body slide">
	<aside class="sidebar show">
		@include('sidebar')
	</aside>
	
	<div class="container-fluid solso-content">
	<div class="row">
		@yield('content')
	</div>
	</div>
</main>

@include('_end')