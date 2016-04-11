<?php ?>

<!DOCTYPE html>
<html lang="en">
		<head>
		<script src="https://use.typekit.net/fob6vhu.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
			<title>Naughton & Ross : Contact</title>
            <link rel="stylesheet" href="{{asset('/css/global.css')}}"/>
			<link rel="stylesheet" href="{{asset('/css/contact.css')}}"/>
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
			<section class="hero green">
				<h1>Contact Us</h1>
			</section>
			<section>
				<div class="half form-wrap">
					<p>
						To contact us please email hello@n-r.co or call us on 0403 515 789 or 0430 113 345
					</p>
				</div>
				<div class="half" style="min-height: 250px;" id="map">
				</div>
			</section>

		</div>
				@include('partials.footer')
				<script type="text/javascript">

var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -37.711, lng: 145.147},
    zoom: 12,
    styles: [{"featureType":"water","elementType":"all","stylers":[{"hue":"#7fc8ed"},{"saturation":55},{"lightness":-6},{"visibility":"on"}]},{"featureType":"water","elementType":"labels","stylers":[{"hue":"#7fc8ed"},{"saturation":55},{"lightness":-6},{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"hue":"#83cead"},{"saturation":1},{"lightness":-15},{"visibility":"on"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"hue":"#f3f4f4"},{"saturation":-84},{"lightness":59},{"visibility":"on"}]},{"featureType":"landscape","elementType":"labels","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"on"}]},{"featureType":"road","elementType":"labels","stylers":[{"hue":"#bbbbbb"},{"saturation":-100},{"lightness":26},{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"hue":"#ffcc00"},{"saturation":100},{"lightness":-35},{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"hue":"#ffcc00"},{"saturation":100},{"lightness":-22},{"visibility":"on"}]},{"featureType":"poi.school","elementType":"all","stylers":[{"hue":"#d7e4e4"},{"saturation":-60},{"lightness":23},{"visibility":"on"}]}]
  });
}

    </script>
				<script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcTmsU-snZyrNQxKeW29ZJGXx_bwO9sfQ&callback=initMap">
    </script>
					</body>
</html>
