<?php ?>

<!DOCTYPE html>
<html lang="en">
		<head>
		<script src="https://use.typekit.net/fob6vhu.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
			<title>V3</title>
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
				<article class="half pwps orange">
					<span>
						<h5>Print Media</h5>
						<p>Preston West Primary School</p>
					</span>
				</article>
				<article class="half rubix blue">
					<span>
						<h5>Identity</h5>
						<p>Cafe Rubix</p>
					</span>
				</article>
				<article class="half yellow">
					<span>
						<h5>Concepts</h5>
						<p>A Big Life</p>
					</span>
				</article>
				<article class="half green">
					<span>
						<h5>Web Design & Development</h5>
						<p>Convenient Crops</p>
					</span>
				</article>
				<article class="half blue">
					<span>
						<h5>Logo</h5>
						<p>Motorcycle Magic</p>
					</span>
				</article>
				<article class="half red">
					<span>
						<h5>Print Media</h5>
						<p>Bus Shorts of Hollywood</p>
					</span>
				</article>
			</section>

		</div>
				@include('partials.footer')


	</body>
</html>
