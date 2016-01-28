<!DOCTYPE html>
<html lang="en">
	<head>
		<script src="https://use.typekit.net/fob6vhu.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
			<title>V3</title>
            <link rel="stylesheet" href="{{asset('/css/global.css')}}"/>
			<link rel="stylesheet" href="{{asset('/css/home.css')}}"/>
			<link rel="stylesheet" href="{{asset('/css/grid.css')}}"/>
			<!--[if IE]>
				<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.css"/>
			<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css" rel="stylesheet">
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">

	</head>
	<body>
		@include('partials.nav-alt')
		<div class="error-wrap">
			<div class="error">
				<h1>Whoops!</h1>
				<p>This page doesn't seem to exist.</p><br>
				<p>Do you want to return <a href="/" class="under">home</a>?</p>
			</div>
		</div>
	</body>
</html>
