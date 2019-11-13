@extends('default')

@section('title')
Article
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
		<form onsubmit="return validateForm();" class="pure-form autocomplete recherche" >
			<datalist id="recherche">
				<a href=""><option></option></a>
				<a href=""><option></option></a>
				<a href=""><option></option></a>
				<a href=""><option></option></a>
				<a href=""><option></option></a>
				<a href=""><option></option></a>
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
	<main>
	<section>
		<h1 style="top: 15%;left: 20%;text-align: center"><font color="black">Article : nom de l'article </font></h1>
					<input style= "float: right;" type="submit" value="Ajouter au panier" id="panier" class=" jsValidForm">
		<ul style="float: left; padding-inline-start: 1%;">
			<div >
				<img src="4.jpg" height="35px" onmouseover="changeImageM3('4.jpg')"/><br><br>
			</div>
			<div >
				<img src="5.jpg" height="35px" onmouseover="changeImageM3('5.jpg')"/> <br><br>
			</div>
			<div >
				<img src="6.jpg" height="35px" onmouseover="changeImageM3('6.jpg')"/><br><br>
			</div>
			<div >
				<img src="4.jpg" height="35px" onmouseover="changeImageM3('4.jpg')"/><br><br>
			</div>
		</ul>
		<p><img class="ml-2" id="id_image" src="4.jpg" style="height:50%;width: 50%;left: 5%;float: left;margin-right: 1%;"/></p><br>
		<p><u>Description : </u></p><br><br>

		<p><span style="border: 1px solid white;">Matériel:Polyester.Manches Longues.Blouson Style Militaire Classique pour Automne Manteau Homme Hommes Veste Simili Cuir Côtelé Cuir Véritable Blouson Transition Moto Coton Blouson Homme Veste Homme Homme Veste Mont Blouson Homme Veste à Capuche Homme Blousons et Vestes Doudoune Homme Veste Militaire Style Armée Classique Veste pour Homme Veste Coupe vent Imperméable Homme Veste de survêtement pour homme veste de sport Sport Loisirs Fermeture Éclair Homme Classique Style rétro Patches Flight Jacket Veste.
		➤Occasion: idéal pour la vie quotidienne, fête, plage, vacances, école, t-shirts occasionnels match parfait avec un jean, un legging ou un pantalon shorts.Haute qualité / mode / pas cher / chic / cadeau pour la Saint Valentin / offrez à votre ami, collègue / cadeau pour mère / offrez-vous également le meilleur cadeau .</span></span></p>
	</section>

	<div>
		<aside>

			
			<form  method="get" name="quantity">
				<label for="quantity" class="a-native-dropdown"> Quantité :</label>
				<select name="quantity" autocomplete="off" id="quantity" tabindex="0" class="a-native-dropdown">

					<option value="1" selected="">1
					</option>

					<option value="2">2
					</option>

					<option value="3">3
					</option>

					<option value="4">4
					</option>

					<option value="5">5
					</option>

					<option value="6">6
					</option>

					<option value="7">7
					</option>

					<option value="8">8
					</option>

					<option value="9">9
					</option>

					<option value="10">10
					</option>

					<option value="11">11
					</option>

					<option value="12">12
					</option>

					<option value="13">13
					</option>

					<option value="14">14
					</option>                   

					<option value="15">15
					</option>

				</select>
			<!-- 	 <?php
			$choix=1;
							
			$prix = 6.60;
			$prix = $choix * $prix;
				echo "le prix est de ".$prix."€";
	
		
			?>  -->
				<input style= "" type="submit" value="Calculer le prix" id="panier" class=" jsValidForm">
			</form>


		</aside>
	</div>
	<script>
		function changeImageM3(url){
			document.querySelector("p img").src=url;
		}
	</script>
</main>
<?php
// on teste si notre variable est déclarée
if (isset($_POST['id'])) {

	// lancement de la requête
	$sql = 'SELECT url FROM image WHERE id = 1';

	// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
	$req = mysql_query($sql);

	// on récupère le résultat sous forme d'un tableau
	$data = mysql_fetch_array($req);

	// on libère l'espace mémoire alloué pour cette interrogation de la base
	mysql_free_result ($req);
	mysql_close ();

// on affiche le résultat
	echo 'L IAMGE EST '.$sql;
}
else {
	echo 'IL N\'Y A RIEN PUTAIN DE MERDE';
}
?>
</main>

@endsection






