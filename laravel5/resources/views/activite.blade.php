@extends('default')

<!doctype html>

@section('head')

<style>

	@media only screen and (min-height: 745px) {
		#idk {
			position: relative;
		}
	}

	@media only screen and (min-height: 825px) and (max-width:971px) {
		#idk {
			position: absolute;
		}
	}
	.coeur{
		float: right;
		color: black;
		font-size: 70%;
	}
	.rounded{
		float: center;
		height:30%;
		width: 30%;
		margin-top: 1%;
		margin-right: 1%;
		margin-left: 1%;
	}
	.element.style{
		float: right;
		margin-left: 0%;
		margin-right: 0%;

	}
	.rounded2{
		height:15%;
		width: 15%;
		margin-top: 1%;
		margin-right: 1%;
		margin-left: 1%;
	}
	.jumbotron {
		padding: 1rem 1rem;
		margin-bottom: 0rem; 

	}
	.btn-sm:hover
	{
		background-color: orange !important;
	}

	.fa-heart{
		color: #636e72;
		margin: margin-right;
	}
	.commentaire{
		top: 50%; left: 50%;
	}
	.monBoutton {
		background-color: green;
		Color:white;
		float: left;
		font-weight: bold;
		padding: 1% 2%;
		cursor: pointer;   
	}
	.commentaire{
		text-align:center;
	}
	.commentaireZone{
		float: right;
		width: 60%;
		height: 530px;
		margin-right:5%;
		margin-bottom:5%;
		border:20% solid #67ab9f;
		background-color:#b3d8d2;
		overflow:scroll;
	}
	.Entrer{
		width: 25%;
		float: left;
	}
	.url{
		width: 25%;
	}
</style>

@endsection


@section('title')
CESI
@endsection

@section('nav')
<!-- Barre de navigation avec de l'autocomplétion -->
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
								<li><a class="active" href="{{ url('/home') }}">Home</a></li>
								<li><a href="{{ url('/activities') }}">Activités</a></li>
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

<main>

	<section class="jumbotron text-center">
		<div >

			<a href=" Inscription" target="_blank" class="monBoutton">-> Inscription <- </a> 



			<!--Récupération des données souhaités  -->
			<?php

			$activite = DB::table('actives')
			->where('id', '=', $id)
			->get();

			$photo = DB::table('photo')
			->where([
				['idActivite', '=', $id],
				['idphoto', '=', $id],
			])
			->get();

			$ah = DB::table('fusion')
			->where([
				['idActivite', '=', $id],
			])
			->get();

			$commentaire = DB::table('fusion')
			->where([

				['idActivite', '=', $id],
			])
			->groupBy('idFusion')
			->get();

			$count = DB::table('like')

			->where('idActivite', '=', $id)
			->get();
			?>

			<!--lancement de la commande foreach pour la récupération du titre de l'activité ainsi que du nombre de Like que l'activité possède  -->
			@foreach($count as $coeur)
			@foreach($activite as $active)
			<div id="boutonactu">
				<h1 >{{ $active->nomActivite }} <button id="envoielike" type="button" class= "fas false fa-heart coeur"> <b>{{ $coeur->Like }} </b></button></h1>
			</div>
			
		</div>
		@endforeach
		@endforeach
	</section>
	<!-- lancement de la commande foreach pour la récupération de l'image de l'activité -->
	@foreach($photo as $img)

	<img class="rounded" src="{{ $img->url }}" >
	<img class="rounded2" src="{{ $img->url }}" >

	@endforeach
	<!-- lancement de la commande foreach pour la récupération de la description, de la date ainsi que de la localisation de l'activité -->
	@foreach($activite as $active)
	<p><u>Présentation : </u></p>

	<p >{{ $active->descriptionActivite }}</p><br>

	<p><u>Date :</u> {{ $active->dateActivite }}  </p>
	<p><u>Localisation :</u> {{ $active->localisation }}  </p>
	@endforeach
	<!-- création de la zone pour la visualisation des commentaires -->
	<section id="comments">
		<div id="respond" class="comment-respond">
			<h3 id="reply-title"  class="comment-reply-title commentaire">Commenter l'activité: </h3><br>
			<div class="commentaireZone">
				<for>
					<!-- Récupération de l'username de la personne connecté afin de l'afficher dans les commentaires -->
					<?php
					if (Session::has('username')){
						$username=Sesion::get('username');
					}
					?>
					<!-- Affichage des commentaires/ images -->
					<form method="post" action="{{url(/test/<?php echo $id ?>)}}" class="comment-form">
						{{ csrf_field() }}
						@foreach($ah as $comm)

						@foreach($commentaire as $coucou)
						<img class="rounded" src="{{ $comm->url }}">

						<p>Commenter par: $username {{ $coucou->contenuDescription }}</p><br>
						@endforeach
						@endforeach

					</div>
					<!--Création de la zone d'écriture pour les commentaire ainsi que pour l'url de l'image  -->
					<p><label for="comment">Entrer votre commentaire:</label></p>
					<input class="form-control mr-sm-2 Entrer" type="text" name="commentaire" placeholder="Entrer votre commentaire"></input> 
					<p class="form-submit">
						<input name="envoie" type="submit"  class="submit" value="Envoyer"><br><br>
					</p>

					{{ csrf_field() }}
					<input class="form-control mr-sm-2 url" type="text" name="url" placeholder="déposer votre url pour imager cet événement">
				</form><br><br><br><br><br><br><br><br><br><br><br><br>

			</div>
		</section>


		<br>
		<br>

	</form>
	<form method="get" action="{{url('/all')}}">
		<a href="path_to_file" download="allImg"> <input name="envoie" type="submit"  class="submit" value="Download"></a>
	</form>
<?php $tavariable="ok" ?>
</main>

@endsection

@section('script')
<script>
	$('#envoielike').click(function(){
		var php = "<?php echo $tavariable; ?>";
		console.log(php);
		$.ajax({
       url : 'http://localhost:8000/like', // La ressource ciblée
       type : 'GET', // Le type de la requête HTTP.
       data : 'utilisateur=',
       success:
       		function(retour){
       			location.reload()
       			console.log(retour);
       		}
    });
     
   	
		

   
});


</script>


@endsection