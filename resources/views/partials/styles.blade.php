<link href='http://fonts.googleapis.com/css?family=Pinyon+Script' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Serif+Pro:400,700' rel='stylesheet' type='text/css'>
@if($_ENV['APP_ENV'] == 'production')
	<link rel="stylesheet" href="{{ elixir('css/all.min.css')}}">
@else
	<link rel="stylesheet" href="{{ elixir('css/all.min.css')}}">
@endif