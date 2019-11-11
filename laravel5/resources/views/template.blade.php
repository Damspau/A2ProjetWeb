<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>template</title>
	<!-- Carousel -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
	crossorigin="anonymous"></script>
	<!--  -->
	<link rel="stylesheet" href="https://cdn.rawgit.com/yahoo/pure-release/v0.6.0/pure-min.css">



	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="styles/css/fontawesome-all.min.css">
	<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">


	<!-- Styles -->
	<style>
		.tab {
			float: left;
			border: 1% solid #ccc;
			background-color: #6684BD;
			width: 7%;
			height: 20%;
			position:fixed;

		}
		.logo4{
			color: #4b6584;
		}
		.containe{
			top: 85%;
			position: fixed;

		}
		footer{
			background-color: #7D6D5B;
		}

	</style>
</head>
<body>
	<main>
		<header>
			<h1 style=" font-size: 150%;text-align: center;"><em>Actualité</em></h1>
		</header>
		<div class="container">
			<div class="row">
 <div class="col-sm-5 col-md-5 col-lg-5">
				<div class="bd-example">
					<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
							<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
							<li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
						</ol>
						<div class="carousel-inner ">
							<div class="carousel-item active"date-interval="2000">
								<img src="4.jpg" class="d-block w-100">
								<div class="carousel-caption d-none d-md-block">
									<h5>Tesla</h5>
									<p>description</p>
								</div>
							</div>
							<div class="carousel-item ">
								<img src="5.jpg" class="d-block w-100 ">
								<div class="carousel-caption d-none d-md-block">
									<h5>Ford</h5>
									<p>description</p>
								</div>
							</div>
							<div class="carousel-item ">
								<img src="6.jpg" class="d-block w-100 ">
								<div class="carousel-caption d-none d-md-block">
									<h5>Alfa Romeo</h5>
									<p>description</p>
								</div>
							</div>
							<div class="carousel-item ">
								<img src="7.png" class="d-block w-100 ">
								<div class="carousel-caption d-none d-md-block">
									<h5>Alfa Romeo</h5>
									<p>description</p>
								</div>
							</div>

						</div>
						<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>


 <div class="col-sm-5 col-md-5 col-lg-5">
				<div class="bd-example">
					<div id="carouselExampleCaptions2" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleCaptions2" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleCaptions2" data-slide-to="1"></li>
							<li data-target="#carouselExampleCaptions2" data-slide-to="2"></li>
							<li data-target="#carouselExampleCaptions2" data-slide-to="3"></li>
						</ol>
						<div class="carousel-inner ">
							<div class="carousel-item active"date-interval="2000">
								<img src="4.jpg" class="d-block w-100">
								<div class="carousel-caption d-none d-md-block">
									<h5>Tesla</h5>
									<p>description</p>
								</div>
							</div>
							<div class="carousel-item ">
								<img src="5.jpg" class="d-block w-100 ">
								<div class="carousel-caption d-none d-md-block">
									<h5>Ford</h5>
									<p>description</p>
								</div>
							</div>
							<div class="carousel-item ">
								<img src="6.jpg" class="d-block w-100 ">
								<div class="carousel-caption d-none d-md-block">
									<h5>Alfa Romeo</h5>
									<p>description</p>
								</div>
							</div>
							<div class="carousel-item ">
								<img src="7.png" class="d-block w-100 ">
								<div class="carousel-caption d-none d-md-block">
									<h5>Alfa Romeo</h5>
									<p>description</p>
								</div>
							</div>

						</div>
						<a class="carousel-control-prev" href="#carouselExampleCaptions2" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleCaptions2" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>

		</div>
	</div>



	</main>

	<div class="tab"><ul style="font-size: 150%" >
		<div>
			<a  href="https://twitter.com/cesiingenieurs%20" rel="noreferrer noopener" target="_blank" title="Twitter"><i class="fab fa-twitter logo4"></i></a>
		</div>
		<div>
			<a href="https://discord.gg/Y32yARN" rel="noreferrer noopener" target="_blank" title="LinkedIn"><i class="fab fa-discord logo4"></i></a>
		</div><div>
			<a href="http://www.viadeo.com/fr/company/ei-cesi" rel="noreferrer noopener" target="_blank" title="Viadeo"><i class="fab fa-instagram logo4"></i></a>
		</div><div>
			<a href="https://www.facebook.com/CESIingenieurs/" rel="noreferrer noopener" target="_blank" title="Facebook"><i class="fab fa-facebook logo4"></i></a></div>
		</ul>
	</div>

	<footer class="mt-5 bg-green" >
		<div class="containe">
			<div class="row">
				<div class="col-sm-3 col-md-3 col-lg-3">
					<i class=" navbar-brand" href="#"> information légale: </i>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div >
						<i>Mention légale</i>
					</div>
					<div>
						<i>Politique de protection de données</i>
					</div>
				</div>
				<div class="col-sm-3 col-md-3 col-lg-3">
					<i class="navbar-brand"> Contactez-nous</i>
				</div>
				<div class="col-sm-3 col-md-3 col-lg-3">
					<i class="navbar-brand"> © CESI 2019</i>
				</div>
			</div>

		</div>
	</footer>
</body>
</html> 