<?php ?>

<!DOCTYPE html>
<html lang="en">
		<head>
		<script src="https://use.typekit.net/fob6vhu.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
			<title>Naughton & Ross : About</title>
			<link rel="stylesheet" href="{{asset('/css/global.css')}}"/>
			<link rel="stylesheet" href="{{asset('/css/about.css')}}"/>
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
		<div class="content grid">
			<section>
				<div class="hero new-blue">
					<h1>Who we are</h1>
				</div>
			</section>
			<div class="map"></div>
			<section>
				<div class="half">
						<div class="willng profile">
							<span>
								<h5>Full Stack Developer</h5>
								<h3>William Naughton-Gravette</h3>
							</span>
						</div>
						<div class="skill-title">
							<h5>Skills</h5>
						</div>
						<div class="bars">
							<div class="skillbar clearfix " data-percent="85%">
								<div class="skillbar-title" style=""><span>HTML5</span></div>
								<div class="skillbar-bar green"></div>
							</div> <!-- End Skill Bar -->

							<div class="skillbar clearfix" data-percent="80%">
								<div class="skillbar-title"><span>CSS3</span></div>
								<div class="skillbar-bar yellow"  ></div>
							</div> <!-- End Skill Bar -->

							<div class="skillbar clearfix" data-percent="90%">
								<div class="skillbar-title"><span>PHP</span></div>
								<div class="skillbar-bar blue"></div>
							</div> <!-- End Skill Bar -->

							<div class="skillbar clearfix" data-percent="75%">
								<div class="skillbar-title"><span>Javascript</span></div>
								<div class="skillbar-bar orange"></div>
							</div> <!-- End Skill Bar -->

							<div class="skillbar clearfix" data-percent="80%">
								<div class="skillbar-title"><span>Lightroom</span></div>
								<div class="skillbar-bar red"></div>
							</div> <!-- End Skill Bar -->

							<div class="skillbar clearfix" data-percent="65%">
								<div class="skillbar-title"><span>Photoshop</span></div>
								<div class="skillbar-bar blue"></div>
							</div> <!-- End Skill Bar -->
						</div>
						<div class="info">

						</div>
							<div class="social">
								<a href="http://twitter.com/willpsng/"><i class="fa fa-twitter"></i></a>
								<a href="http://instagram.com/wngravette/"><i class="fa fa-instagram"></i></a>
								<a href="htttp://willng.me" target="_blank"><i class="fa fa-globe"></i></a>
								<a href="mailto:william@n-r.co"><i class="fa fa-envelope-o"></i></a>
								<a href="tel:+61430113345"><i class="fa fa-phone"></i></a>
							</div>
				</div>
				<div class="half">
						<div class="tomr profile">
							<span>
								<h5>Full Stack Designer</h5>
								<h3>Tom Ross</h3>
							</span>
						</div>
						<div class="skill-title">
							<h5>Skills</h5>
						</div>
						<div class="bars">
							<div class="skillbar clearfix " data-percent="85%">
								<div class="skillbar-title" style=""><span>HTML5</span></div>
								<div class="skillbar-bar orange"></div>
							</div> <!-- End Skill Bar -->

							<div class="skillbar clearfix " data-percent="80%">
								<div class="skillbar-title"><span>CSS3</span></div>
								<div class="skillbar-bar red"  ></div>
							</div> <!-- End Skill Bar -->

							<div class="skillbar clearfix " data-percent="90%">
								<div class="skillbar-title"><span>Indesign</span></div>
								<div class="skillbar-bar blue"></div>
							</div> <!-- End Skill Bar -->

							<div class="skillbar clearfix " data-percent="75%">
								<div class="skillbar-title"><span>Wordpress</span></div>
								<div class="skillbar-bar green"></div>
							</div> <!-- End Skill Bar -->

							<div class="skillbar clearfix " data-percent="70%">
								<div class="skillbar-title"><span>Illustrator</span></div>
								<div class="skillbar-bar yellow"></div>
							</div> <!-- End Skill Bar -->

							<div class="skillbar clearfix " data-percent="70%">
								<div class="skillbar-title"><span>Photoshop</span></div>
								<div class="skillbar-bar orange"></div>
							</div> <!-- End Skill Bar -->
						</div>
						<div class="info">
						</div>
						<div class="social">
							<a href="http://instagram.com/fervu/"><i class="fa fa-instagram"></i></a>
							<a href="http://fervu.tumblr.com"><i class="fa fa-tumblr"></i></a>
							<a href="htttp://tomross.me" target="_blank"><i class="fa fa-globe"></i></a>
							<a href="mailto:tom@n-r.co"><i class="fa fa-envelope-o"></i></a>
							<a href="tel:+61403515789"><i class="fa fa-phone"></i></a>
						</div>
				</div>
			</section>

		</div>
				@include('partials.footer')

				<script>
					jQuery(document).ready(function(){
						jQuery('.skillbar').each(function(){
							jQuery(this).find('.skillbar-bar').animate({
								width:jQuery(this).attr('data-percent')
							},100);
						});
					});
				</script>

	</body>
</html>
