<?php ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<script src="https://use.typekit.net/fob6vhu.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
			<title>V3</title>
			<link rel="stylesheet" href="{{asset('css/global.css')}}"/>
			<link rel="stylesheet" href="{{asset('outdatedbrowser/outdatedbrowser.min.css')}}"/>
			<script async src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.j"></script>
			<!--[if IE]>
				<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
			<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css" rel="stylesheet">
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<style>
				/* services */
				.services section{
					text-align: center;
				}

				.services article{
					display: inline-block;
					min-width: 100px;
				}

				.serv article div{
					overflow: auto;
				}

				.serv article div span{
					position: relative;
					bottom: auto;
					padding: 0;
				}

				.services article div:first-of-type{
					padding: 0%;
				}
				.serv .inner img{
					width: 60%;
					margin: 0 auto;
					display: block;
					margin-top: 12%;
				}

				.serv article a{
					color: #33449c;
				}

				.serv article h4{
					font-weight: 300;
				}
				@media (max-width: 800px) {
						.serv article .inner h4{
							font-size: 12px;
							}
					}
				@media (max-width: 600px) {
					.serv article .inner img{
						float: left;
						width: 50%;
						margin: 0;
					}
					.serv article .inner h4{
						padding-top: 20%;
							font-size: 16px;

					}
					.grid section.serv{
						margin-bottom: 0;
					}
					.serv-opt .fourfive p{
						font-size: 0.8em !important;
						line-height: 1.2em !important;
					}
				}

				.serv-opt .fourfive{
					width: 100%;
					overflow: auto;
					padding: 5%;
					color: #000000;
					background-color: #d9f4fd;
					float: left;
					font-size: 1.6em;
					font-weight: 300;
				}
				.serv-opt .fourfive p{
					font-size: 1.2em;
					line-height:1.2em;
					font-weight: 300;
					}
				.serv-opt .onefive{
					width: calc(20% - 10px);
					overflow: auto;
					float: left;
					background-color: #8715b7;
					padding: 5%;
					margin-right: 20px;
				}
				a.highlight{
					font-weight: 700;
					border-bottom: 2px solid #33449c;
					text-decoration: none;
					padding-top: 4%;
					cursor: pointer;
				}
				a.highlight:hover{
					border-bottom: 4px solid #33449c;

				}
				.serv{
					display: none;
				}
			</style>
	</head>
	<body>
		@include('partials.nav-alt')
		<div class="content grid">
			<section class="hero new-blue">
				<h1>Naughton & Ross is a design & development studio based in Melbourne, Australia.</h1>
			</section>

			<section>
				<article class="half rubix expand-wrap">
					<a class="expand" href="portfolio/rubix/">
					</a>
				</article>
				<article class="half pwps">
					<span>
						<h5>Print Media</h5>
						<p>Preston West Primary School</p>
					</span>
				</article>
			</section>
			<section class="serv-opt">
				<article class="fourfive">
					<p>We specialise in Graphic Design & Web Design + Development. We love good design and building products and businesses in both print and digital formats.</p><br>
					<a class="highlight" id="servmore">What we do</a>
				</article>
			</section>
			<section class="serv" id="serv">
					<article class="five comp">
						<a href="portfolio/search.php">
							<div class="inner">
								<img src="{{asset('img/icon-b/webd2.svg')}}"/>
									<h4>Web Design & Development</h4>
							</div>
						</a>
					</article>
					<article class="five comp">
						<a href="portfolio/search.php">
							<div class="inner">
								<img src="{{asset('img/icon-b/printn.svg')}}"/>
									<h4>Print Design</h4>
							</div>
						</a>
					</article>
					<article class="five comp">
						<a href="portfolio/search.php">
							<div class="inner">
								<img src="{{asset('img/icon-b/photog.svg')}}"/>
									<h4>Photography</h4>
							</div>
						</a>
					</article>
					<article class="five comp">
						<a href="portfolio/search.php">
							<div class="inner">
								<img src="{{asset('img/icon-b/gd.svg')}}"/>
									<h4>Logo & Graphic Design</h4>
							</div>
						</a>
					</article>
					<article class="five comp">
						<a href="portfolio/search.php">
							<div class="inner">
								<img src="{{asset('img/icon-b/brand.svg')}}"/>
									<h4>Brand Development</h4>
							</div>
						</a>
					</article>
			</section>
			<section>
				<article class="vert-two-one grey">
					<img class="full-fit" src="{{asset('img/phonemockcrops.png')}}"/>
				</article>
					<div class="vert-two-one-wrap">
						<section class="thirds">
							<article class="six n-pink">
								<a href="contact/" class="expand white">
									<span>
										<h5>Get Started</h5>
										<p>Contact us</p>
									</span>
								</a>
							</article>
							<article class="two-six moto">
								<span class="invert">
									<h5>Logo Design</h5>
									<p>Motorcycle Magic</p>
								</span>
							</article>
						</section>
						<section class="thirds">
							<article class="two-six abl">
								<span>
									<h5>Concepts</h5>
									<p>A Big Life</p>
								</span>
							</article>
							<article class="six n-green">
								<a href="portfolio/" class="expand white">
									<span>
										<h5>View all our work</h5>
										<p>Portfolio</p>
									</span>
									</a>
							</article>
						</section>
					</div>
			</section>
		</div>
		<!--<div class="content services">
			<h1>Our Services</h1>
			<section>
				<article>
					<div>
						<img src="{{asset('img/web-new.svg">
					</div>
					<div>
						<h5>Web Design & Development</h5>
						<p>PHP, Wordpress, Responsive</p>
					</div>
				</article>
				<article>
					<div>
						<img src="{{asset('img/web-new.svg">
					</div>
					<div>
						<h5>Print Media</h5>
						<p>PHP, Wordpress, Responsive</p>
					</div>
				</article>
				<article>
					<div>
						<img src="{{asset('img/web-new.svg">
					</div>
					<div>
						<h5>Photography</h5>
						<p>PHP, Wordpress, Responsive</p>
					</div>
				</article>
				<article>
					<div>
						<img src="{{asset('img/web-new.svg">
					</div>
					<div>
						<h5>Identity & Branding</h5>
						<p>Logo, Stationary</p>
					</div>
				</article>
			</section>
		</div>-->
				@include('partials.footer')
			<script>
				$(document).ready(function(){
			        $('#servmore').on('click', function(event) {
			             $('#serv').fadeToggle('show');
			        });
			    })

			</script>

			</body>
</html>
