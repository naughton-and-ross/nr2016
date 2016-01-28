<?php ?>

<!DOCTYPE html>
<html lang="en">
		<head>
		<script src="https://use.typekit.net/fob6vhu.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
			<title>Naughton & Ross Portfolio</title>
            <link rel="stylesheet" href="{{asset('/css/global.css')}}"/>
			<link rel="stylesheet" href="{{asset('/css/portfolio.css')}}"/>
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
		<div class="content grid portfolio">
			<section>
				<div class="hero red">
					<h1>Our Work</h1>
				</div>
			</section>
			<section>
				@foreach ($projects as $project)
				<article class="half" style="background-image:url({{url('upload')}}/{{$project->id}}-cover.jpeg)">
					<a class="expand projecta" href="{{url('portfolio')}}/{{$project->project_slug}}">
					<span>
						<h5>{{$project->project_catagory}}</h5>
						<p>{{$project->project_name}}</p>
					</span>
					</a>
				</article>
				@endforeach
		</div>
				@include('partials.footer')


	</body>
</html>
