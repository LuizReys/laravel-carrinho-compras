<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Loja Virtual - @yield('page_title')</title>
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	@include('layout._menu')
	@include('layout._banner')
	@yield('content')
	@include('layout._footer')

	<script src="{{asset('js/script.js')}}" type="text/javascript"></script>
</body>
</html>