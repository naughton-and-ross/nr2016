<?php ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<script src="https://use.typekit.net/fob6vhu.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
			<title>V3</title>
			<link rel="stylesheet" href="{{asset('css/global.css')}}"/>
			<link rel="stylesheet" href="{{asset('css/admin.css')}}"/>
			<link rel="stylesheet" href="{{asset('css/grid.css')}}"/>
			<!--[if IE]>
				<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.css"/>
			<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css" rel="stylesheet">
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">

	</head>
	<body class="admin-bod">
		@include('partials.nav-alt')
		<div class="content admin grid">
			<section>
				<div class="hero blue">
					<h1>Admin</h1>
				</div>
			</section>
			<div class="sidebar" id="projects">
				<h4>Projects</h4>
				<ul>
                    @foreach ($projects as $project)
					<li><a href="">{{$project->project_name}}</a></li>
                    @endforeach
				</ul>
				<!-- DATABASE ENTRIES
					<ul>
						<li>
							<a href="PROJECT LINK">TITLE</a>
						</li>

					</ul>
				-->
			</div>
			<div class="main">
				<h4>Add a project:</h4>
                {!! Form::open(['url' => '/admin/projects']) !!}
					<section>
						<p>Title:</p>
							<input type="text" name="project_name"/>
                        <p>Description:</p>
							<input type="text" name="project_desc"/>
						<p>Area(Tags):</p>
							<select name="project_catagory">
								<option>Web</option>
								<option>Print</option>
								<option>Photography</option>
								<option>Graphic Design</option>
								<option>Brand Development</option>
							</select>
						<input type="file" name="other_file" multiple/>
						<p>Info:</p>
						<textarea name="project_info"></textarea>
						<p>Cover Image:</p>
						<label><input type="checkbox" name="light_img"/>Light Image (inverse text colour)</label>
						<input type="file" name="cover_img"/>
						<p>All Pictures:</p>
						<input type="file" name="all_img" multiple/>
					</section>
					<section>
						<button>Submit</button>
					</section>
				</form>
			</div>
		</div>
				@include('partials.footer')

	</body>
</html>
