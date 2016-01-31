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
					<li><a href="{{url('portfolio')}}/{{$project->project_slug}}">{{$project->project_name}}</a></li>
                    @endforeach
				</ul>
				<h4>Quick Links</h4>
					<ul>
						<li><a href="http://n-rdev.co/clientapp/">Client App</a></li>
						<li><a href="http://moodboard.n-r.co">Moodboard</a></li>
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
				<h5>All images must be jpg</h5>
                {!! Form::open(['url' => '/admin/projects', 'files' => true]) !!}
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
						<p>Info:</p>
						<textarea name="project_info"></textarea>
						<p>Thumb/Cover Image:</p>
						<label><input type="checkbox" name="light_img"/>Light Image (inverse text colour)</label>
						<input type="file" name="cover_img"/>
						<p>Slider Pictures:</p>
						<input type="file" name="all_img[]" multiple/>
					</section>
					<section>
						<button>Submit</button>
					</section>
				</form>
			</div>
		</div>
		<div class="content">
			<div class="feat">
				<table>
					<thead>
						<tr>
							<th><h4>Featured Projects</h4></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><img src="{{asset('/img/grid/grid-1.svg')}}"/></td>
							<td>
								<form>
									<select>
										<option>Cafe Rubix</option>
										<option>Convenient Crops</option>
										<option>Motorcycle Magic</option>
										<option>A Big Life</option>
									</select>
								</form>
							</td>
						</tr>
						<tr>
							<td><img src="{{asset('/img/grid/grid-2.svg')}}"/></td>
							<td>
								<form>
									<select>
										<option>Cafe Rubix</option>
										<option>Convenient Crops</option>
										<option>Motorcycle Magic</option>
										<option>A Big Life</option>
									</select>
								</form>
							</td>
						</tr>
						<tr class="portrait">
							<td><img src="{{asset('/img/grid/grid-3.svg')}}"/></td>
							<td>
								<form>
									<select>
										<option>Cafe Rubix</option>
										<option>Convenient Crops</option>
										<option>Motorcycle Magic</option>
										<option>A Big Life</option>
									</select>
								</form>
								<form>
									<h5>Portrait Project Icon</h5>
									<input type="file"/>
									<input type="submit"/>
								</form>
							</td>
						</tr>
						<tr>
							<td><img src="{{asset('/img/grid/grid-4.svg')}}"/></td>
							<td>
								<form>
									<select>
										<option>Cafe Rubix</option>
										<option>Convenient Crops</option>
										<option>Motorcycle Magic</option>
										<option>A Big Life</option>
									</select>
								</form>
							</td>
						</tr>
						<tr>
							<td><img src="{{asset('/img/grid/grid-5.svg')}}"/></td>
							<td>
								<form>
									<select>
										<option>Cafe Rubix</option>
										<option>Convenient Crops</option>
										<option>Motorcycle Magic</option>
										<option>A Big Life</option>
									</select>
								</form>
							</td>
						</tr>

					</tbody>
				</table>

			</div>
		</div>

				@include('partials.footer')

	</body>
</html>
