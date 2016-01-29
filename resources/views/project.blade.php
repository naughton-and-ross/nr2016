<?php ?>

<!DOCTYPE html>
<html lang="en">
		<head>
		<script src="https://use.typekit.net/fob6vhu.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
			<title>{{$project->project_name}} - Naughton & Ross</title>
            <link rel="stylesheet" href="{{asset('/css/global.css')}}"/>
			<link rel="stylesheet" href="{{asset('/css/portfolio.css')}}"/>
            <link rel="stylesheet" href="{{asset('/css/owl.carousel.css')}}"/>
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
		<div class="content first-content">
			<div class="title">
				<h5>{{$project->project_catagory}}</h5>
				<h3>{{$project->project_name}}</h3>
			</div>
			<img class="full" src="{{url('/upload/')}}/{{$project->id}}-cover.jpeg"/>
			<div class="project-info">
                <p class="project_desc">
                    {{$project->project_desc}}
                </p>
			    <p>{{$project->project_info}}</p>
			</div>
			<div id="slide" class="owl-carousel">
                @for ($i = 1; $i <= $project->photo_count; $i++)
                <div class="item">
                    <img src="{{url('/upload/')}}/{{$project->id}}-{{$i}}.jpeg"/>
                </div>
                @endfor
	        </div>

	        <!-- DATABASE TEMPLATE
		        <div class="content first-content">
					<div class="title">
						<h5>AREAS COMMA SEPERATED</h5>
						<h3>TITLE</h3>
					</div>
			<img class="full" src="HEROIMGSRC"/>
			<div class="project-info">
			<p>INFO/CONTENT</p>
			</div>
			<div id="slide" class="owl-carousel">
	                <div class="item"><img src="IMGSRC"/></div> // Repeat out for all img //
	                <div class="item"><img src="IMGSRC"/></div>
	        </div>
	        -->


		@include('partials.footer')

		<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

	 <script>
    $(document).ready(function() {
      $("#slide").owlCarousel({

      navigation : true,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem : true,
      navigation : true,
      navigationText : false,
      navigationText: ["<i class='fa fa-angle-left fa-2x'></i>","<i class='fa fa-angle-right fa-2x'></i>"]


      // "singleItem:true" is a shortcut for:
      // items : 1,
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false

      });
    });


    </script>

	</body>
</html>
