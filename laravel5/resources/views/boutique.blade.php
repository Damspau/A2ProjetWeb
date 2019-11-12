@extends('default')

@section('title')
Page d'accueil
@endsection



@section('header')

<nav class="navbar navbar-expand-lg navbar-light" >
	<a class="navbar-brand" href="#"><img class="w-25 p-10" src="https://arras.cesi.fr/wp-content/uploads/sites/9/2019/05/Cesi_Logo_INGENIEUR_RVB-HD-500x296.jpg"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item ">
				<a class="nav-link " href="#">Accueil</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Activités</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link mr-2" href="#">Boutique <span class="sr-only">(current)</span></a>
			</li>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Connection/Inscription</a>
		</li>
	</ul>
	<form class="form-inline my-2 my-lg-0">
		<input class="form-control mr-sm-2"name="recherche" type="search"list="recherche" placeholder="Search" aria-label="Search">

		<button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
		<form onsubmit="return validateForm();" class="pure-form autocomplete" style="position: relative;">
			<datalist id="recherche">
				<a href=""><option>coucou </option></a>
				<a href=""><option></option></a>
				<a href=""><option></option></a>
				<a href=""><option></option></a>
				<a href=""><option> </option></a>
				<a href=""><option> </option></a>
				<a href=""><option></option></a>
				<a href=""><option></option></a>
				<a href=""><option></option></a>
			</datalist>
		</form>
	</form>
</div>
</nav>



@endsection

@section('section')
<main>
	<header>
		<h1 style=" font-size: 150%;text-align: center;"><em>Boutique:</em></h1>
	</header>
	<main>
		<div class="container" style="float: center">
			<div class="row">
				<div class="col-sm-4 col-md-4 col-lg-4">
					<div >
						<a ><img src="voiture.jpg" style="font-size: 20%;"></a> Description du produit
					</div>
					<div >
						<a href="voiture1" style="color:black;">coodies1</a>
					</div>
					<div >
						<a ><img src="voiture.jpg" style="font-size: 20%;"></a> Description du produit
					</div>
					<div >
						<a href="voiture2" style="color:black;">coodies2</a>
					</div>
					<div >
						<a ><img src="voiture.jpg" style="font-size: 20%;"></a> Description du produit
					</div>
					<div >
						<a href="voiture3" style="color:black;">coodies3</a>
					</div>
					<div >
						<a ><img src="voiture.jpg" style="font-size: 20%;"></a> Description du produit
					</div>
					<div >
						<a href="voiture4" style="color:black;">coodies4</a>
					</div>
					<div >
						<a ><img src="voiture.jpg" style="font-size: 20%;"></a> Description du produit
					</div>
					<div >
						<a href="voiture5" style="color:black;">coodies5</a>
					</div>


				</div>
				<div class="col-sm-4 col-md-4 col-lg-4">
					<div >
						<a ><img src="voiture.jpg" style="font-size: 20%;"></a> Description du produit
					</div>
					<div >
						<a href="voiture6" style="color:black;">vetement1</a>
					</div>
					<div >
						<a ><img src="voiture.jpg" style="font-size: 20%;"></a> Description du produit
					</div>
					<div >
						<a href="voiture7" style="color:black;">vetement2</a>
					</div>
					<div >
						<a ><img src="voiture.jpg" style="font-size: 20%;"></a> Description du produit
					</div>
					<div >
						<a href="voiture8" style="color:black;">vetement3</a>
					</div>
					<div >
						<a ><img src="voiture.jpg" style="font-size: 20%;"></a> Description du produit
					</div>
					<div >
						<a href="voiture9" style="color:black;">vetement4</a>
					</div>
					<div >
						<a ><img src="voiture.jpg" style="font-size: 20%;"></a> Description du produit
					</div>
					<div >
						<a href="voiture10" style="color:black;">vetement5</a>
					</div>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4">
					<div >
						<a ><img src="voiture.jpg" style="font-size: 20%;"></a> Description du produit
					</div>
					<div >
						<a href="voiture6" style="color:black;">inconnu</a>
					</div>
					<div >
						<a ><img src="voiture.jpg" style="font-size: 20%;"></a> Description du produit
					</div>
					<div >
						<a href="voiture7" style="color:black;">inconnu</a>
					</div>
					<div >
						<a ><img src="voiture.jpg" style="font-size: 20%;"></a> Description du produit
					</div>
					<div >
						<a href="voiture8" style="color:black;">inconnu</a>
					</div>
					<div >
						<a ><img src="voiture.jpg" style="font-size: 20%;"></a> Description du produit
					</div>
					<div >
						<a href="voiture9" style="color:black;">inconnu</a>
					</div>
					<div >
						<a ><img src="voiture.jpg" style="font-size: 20%;"></a> Description du produit
					</div>
					<div >
						<a href="voiture10" style="color:black;">inconnu</a>
					</div>
				</div>
			</div>
		</div>
	</main>


	@endsection





	@section('section')



	@endsection
