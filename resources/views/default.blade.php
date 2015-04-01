<html>
	<head>
		@include('partials.metas')		
		@include('partials.styles')
	</head>
	<body>
		<header>@include('partials.nav')</header>
		<section class="container">
			@yield('content')
		</section>
		<footer>@include('partials.footer')</footer>
		@include('partials.scripts')
	</body>
</html>
