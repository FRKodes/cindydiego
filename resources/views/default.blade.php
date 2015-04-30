<html>
	<head>
		@include('partials.metas')		
		@include('partials.styles')
	</head>
	<body>
		@include('partials.audio')
		<header>@include('partials.nav')</header>
		<section class="container">
			@yield('content')
		</section>
		<footer>@include('partials.footer')</footer>
		@include('partials.scripts')
		@if($_ENV['APP_ENV'] == 'production')
			@include('partials.GoogleAnalytics')
		@endif
	</body>
</html>
