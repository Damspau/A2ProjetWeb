	@extends('default')

	@section('head')

	  <link rel="stylesheet" href="css/activite.css">


			<style>

			/* @media only screen and (min-height: 676px) {
				#idk {
				position: absolute;
				}
			} */

			   img {
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    max-width: 100%;
    max-height: 100%;
    margin: auto;
    overflow: auto;
}

			</style>

	@endsection

	@section('title')
	CESI News
	@endsection

	@section('nav')

			<div class="header-area ">
			<div id="sticky-header" class="main-header-area">
				<div class="container-fluid p-0">
				<div class="row align-items-center justify-content-between no-gutters">
					<div class="col-xl-2 col-lg-2">
					<div class="logo-img">
						<a href="index.html">
						<img class="w-50" src="https://arras.cesi.fr/wp-content/uploads/sites/9/2019/05/Cesi_Logo_INGENIEUR_RVB-HD-500x296.jpg" alt="">
						</a>
					</div>
					</div>
					<div class="col-xl-7 col-lg-8">
					<div class="main-menu  d-none d-lg-block">
						<nav>
						<ul id="navigation">
							<li><a  href="{{ url('/home') }}">Home</a></li>
							<li><a class="active" href="{{ url('/activities') }}">Activités</a></li>
							<li><a href="{{ url('/shop') }}">Boutique</a></li>
							<li><a href="{{ url('/login') }}">Login/Register</a></li>
							<li class="mt-2 mb-2">
							<form class="form-inline">
								<input class="form-control mr-sm-2" name="recherche" type="search" list="recherche" placeholder="Search" aria-label="Search">

								<button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
								<form onsubmit="return validateForm();" class="pure-form autocomplete">
								<datalist id="recherche">
									<a href="">
									<option>ezggzrtec</option>
									</a>
									<a href="">
									<option></option>
									</a>
									<a href="">
									<option></option>
									</a>
									<a href="">
									<option></option>
									</a>
									<a href="">
									<option> </option>
									</a>
									<a href="">
									<option> </option>
									</a>
									<a href="">
									<option></option>
									</a>
									<a href="">
									<option></option>
									</a>
									<a href="">
									<option></option>
									</a>
								</datalist>
								</form>
							</form>
							</li>
						</ul>
						</nav>
					</div>
					</div>
					<div class="col-xl-3 col-lg-2 d-none d-lg-block">
					<div class="social_media_links">
						<ul>
						<li><a target="_blank" href="https://www.facebook.com/CESIingenieurs/"> <i class="fa fa-facebook"></i> </a></li>
						<li><a target="_blank" href="https://twitter.com/GroupeCESI?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"> <i class="fa fa-twitter"></i> </a></li>
						<li><a target="_blank" href="https://www.instagram.com/campus_cesi/?hl=fr"> <i class="fa fa-instagram"></i> </a></li>
						</ul>
					</div>
					</div>
					<div class="col-12">
					<div class="mobile_menu d-block d-lg-none"></div>
					</div>
				</div>
				</div>
			</div>
			</div>

	@endsection

	@section('section')

	<p>
		<h1 style="text-align: center;"><u style="text-decoration-color:red;">Welcome to our activities : </u></h1>
	</p>

	</br>
	</br>

		<!-- Affichage des activities : -->
			
		<div class="album py-5 bg-light">
			<div class="container">
				<div class="row">

						@foreach($activities as $activite)
						<div class="card mb-4 shadow-sm mr-2">
							<!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>NomActivite</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
							<img src="{{ $activite->photo }}" class="img" alt="img" width="250" height="150">
							<div class="card-body">
								<p class="card-text">{{ $activite->name }}</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<a href="{{ url('/activities/'.$activite->id) }}"><button type="button" class="btn btn-sm btn-outline-secondary" >Voir</button></a>
									</div>
									<button type="button" class="fas fa-heart" >{{ $activite->like }}</button>
								</div>
							</div>
						</div>
						@endforeach
				</div>
			</div>
		</div>
	</div>
</div> 


	@endsection

	@section('script')

	@endsection
