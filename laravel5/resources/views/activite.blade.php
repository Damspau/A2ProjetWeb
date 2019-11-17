
<style>

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
	.butt {
		border: 1px solid black;
		height: 30px;
		width: 100px;
		margin-top: 8px;
		background-color: black;
		margin-bottom: 8px;
	}


	.background {
		background-color: red;
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


<main>

	<section class="jumbotron text-center">
		<div >

			<a href="{{ url('/inscriptionActivites') }}">
				<button type="button" class="btn btn-primary">
					Inscription
				</button>
			</a>

			<!--lancement de la commande foreach pour la récupération du titre de l'activité ainsi que du nombre de Like que l'activité possède  -->
			
			@foreach($activite as $active)
			<form method="post" action="{{ url('/coeur') }}/<?php echo ($id) ?>" class="comment-form">
				<div id="boutonactu">
					<h1 >{{ $active->nomActivite }} <a href="javascript:window.location.reload()"><button id="envoielike" type="button" class= "fas false fa-heart coeur butt"> <b></b></button></a></h1>
				</div>
			</form>
		</div>
		@endforeach
	</section>





	<!-- lancement de la commande foreach pour la récupération de l'image de l'activité -->
	@foreach($photo as $img)

	<img class="rounded" src="{{ $img->url }}" >

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
						$username=Session::get('username');
					}
					?>
					<!-- Affichage des commentaires/ images -->
					
						{{ csrf_field() }}

						
						@foreach($photocom as $data){
						
						<img class="rounded" src="{{ $data->url }}">
						<p>Commenter par: $username <br>{{ $data ->contenuCommentaire }} </p><br>
						<?php if (true){ ?>
						<form name="reset" method="POST" action="{{ url('/deleteComm') }}">
							@csrf
							<input id="id" name="id" type="hidden" value="{{ $data->idPhotoComm }}">
							<input class="btn btn-danger btn-sm remove-from-cart" type="submit" name="btn" value="Delete only this product !" class="btForm" >
						</form>
						<?php }else { ?>

							<form name="reset" method="POST" action="{{ url('/login') }}">
							@csrf
							<input class="btn btn-danger btn-sm remove-from-cart" type="submit" name="btn" value="Delete only this product !" class="btForm" >
						</form>
						<?php }
									
						?>

					}@endforeach

					

				</div>

<form method="post" action="{{ url('/test') }}/<?php echo ($id) ?>" class="comment-form">
				<!--Création de la zone d'écriture pour les commentaire ainsi que pour l'url de l'image  -->
				<p><label for="comment">Entrer votre commentaire:</label></p>
				<input class="form-control mr-sm-2 Entrer" type="text" name="commentaire" placeholder="Entrer votre commentaire"></input> 
				<p class="form-submit">
					<input name="envoie" type="submit" class="submit" value="Envoyer"><br><br>
				</p>

				{{ csrf_field() }}
				<input class="form-control mr-sm-2 url" type="text" name="url" placeholder="déposer votre url pour imager cet événement">
			</form><br><br><br><br><br><br><br><br><br><br><br><br>

		</div>
	</section>


	<br>
	<br>

</form>

</main>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js%22%3E</script>
	<script type="text/javascript">
		$(function() {
			$(".butt").click(function() {
				$(this).toggleClass("background");

			});

		});

// 	$('#envoielike').click(function(){
		//var php = "<?php //echo $tavariable; ?>";
// 		console.log(php);
// 		$.ajax({
//    url : 'http://localhost:8000/like', // La ressource ciblée
//    type : 'GET', // Le type de la requête HTTP.
//    data : 'utilisateur=',
//    success:
//    function(retour){
   	
//    	console.log(retour);
//    }
// });
	</script>

