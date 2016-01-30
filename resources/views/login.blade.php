<!DOCTYPE html>
<html lang="en">
		<head>
		<script src="https://use.typekit.net/fob6vhu.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
			<title>Login</title>
            <link rel="stylesheet" href="{{asset('/css/global.css')}}"/>
			<link rel="stylesheet" href="{{asset('/css/login.css')}}"/>
			<link rel="stylesheet" href="{{asset('/css/grid.css')}}"/>
			<!--[if IE]>
				<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.css"/>
			<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css" rel="stylesheet">
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">

	</head>
	<body class="login-bg" style="background-image: url({{asset('img/login_feather.jpg')}});">
			@include('partials.nav-white')
			<div class="login-wrap">
				<div class="login">
					<section class="t-center back-wrap">
							<div class="back"><i class="fa fa-angle-left fa-2x"></i></div>
						<img class="logo nrlogo" src="{{asset('/img/logo_full.svg')}}"/>
						<img class="logo mblogo" src="{{asset('/img/mb_logo.svg')}}"/>
						<img class="logo calogo" src="{{asset('/img/ca_logo.svg')}}"/>
					</section>
					<section class="t-center capt">
						<h5>Click your tool below to login.</h5>
					</section>
					<section class="opt-wrap">
						<article id="clientapp">
							<i class="fa fa-sitemap"></i>
							<p>ClientApp</p>
						</article>
						<article id="moodboard">
							<i class="fa fa-th-large"></i>
							<p>Moodboard</p>
						</article>
						<article id="admin">
							<i class="fa fa-user"></i>
							<p>Admin</p>
						</article>
					</section>
					<section id="clientappform" class="adminform">
						<form>
							<p>Client Number</p>
							<input type="text"/>
							<button>Submit</button>
						</form>
					</section>
					<section id="moodboardform" class="adminform">
						<form>
							<p>Client Number</p>
							<input type="text"/>
							<button>Submit</button>
						</form>

					</section>
					<section id="adminform" class="adminform">
						<form>
							<p>Username</p>
								<input type="text"/>
							<p>Password</p>
								<input type="password"/>
							<button>Submit</button>
						</form>

					</section>
				</div>
			</div>
			<script>
				jQuery(document).ready(function(){
			        jQuery('#moodboard').on('click', function(event) {
			             jQuery('.capt,.opt-wrap,.nrlogo').fadeToggle(750);
			             jQuery('#moodboardform,.mblogo,.back').delay(760).fadeToggle('show');
			        });
			        jQuery('#clientapp').on('click', function(event) {
			             jQuery('.capt,.opt-wrap,.nrlogo').fadeToggle('show');
			             jQuery('#clientappform,.calogo,.back').delay(760).fadeToggle('show');
			        });
			        jQuery('#admin').on('click', function(event) {
			             jQuery('.capt,.opt-wrap').fadeToggle('show');
			             jQuery('#adminform,.back').delay(760).fadeToggle('show');
			        });
			        jQuery('.back').on('click', function(event) {
			             jQuery('#moodboardform,#clientappform,.calogo,#adminform,.mblogo,.back').fadeOut(750);
			             jQuery('.capt,.opt-wrap,.nrlogo').delay(760).fadeIn();
			        });
			    })
			</script>
					@include('partials.footer')
		</body>
	</html>
