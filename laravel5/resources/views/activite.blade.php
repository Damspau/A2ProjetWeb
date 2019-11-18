@extends('default')

<!doctype html>

@section('head')


@endsection


@section('title')
CESI Activité
@endsection

@section('nav')

<li><a href="{{ url('/home') }}">Home</a></li>
<li><a  class="active" href="{{ url('/activities') }}">Activités</a></li>
<li><a href="{{ url('/shop') }}">Boutique</a></li>


@endsection

@section('section')

<main>

  <section class="jumbotron text-center">
    <div >

      <a href="{{ url('/inscriptionActivites') }}">
        <button type="button" class=" popup btn btn-primary monBoutton">
          Inscription
        </button>
      </a>

      <!--lancement de la commande foreach pour la récupération du titre de l'activité ainsi que du nombre de Like que l'activité possède  -->
      
      @foreach($activite as $active)
      <form method="post" action="{{ url('/coeur') }}/<?php echo ($id) ?>" class="comment-form">
        <div id="boutonactu">
          <h1 >{{ $active->nomActivite }} <a href="javascript:window.location.reload()"><button id="envoielike" type="button" class= "fas false fa-heart coeur"> <b></b></button></a></h1>
        </div>
      </form>
    </div>
    @endforeach
  </section>





  <!-- lancement de la commande foreach pour la récupération de l'image de l'activité -->
  @foreach($activite as $img)

  <img class="rounded" src="{{ $img->image }}" >

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
           
            <?php if (Session::get('rang')==2 || Session::get('rang')==4){ ?>
            <form name="reset" method="POST" action="{{ url('/deleteComm') }}">
              @csrf
              <input id="id" name="id" type="hidden" value="{{ $data->idPhotoComm }}">
              <input class="btn btn-danger btn-sm remove-from-cart"  type="submit" name="btn" value="Delete only this product !" class="btForm" >
            </form>
            <?php }

            //else { ?>

             <!--  <form name="reset" method="POST" action="{{ url('/login') }}">
              @csrf
              <input class="btn btn-danger btn-sm remove-from-cart" type="submit" name="btn" value="Delete only this product !" class="btForm" >
            </form> -->
           

          
          @endforeach

          

        </div>

<form method="post" action="{{ url('/insert') }}/<?php echo ($id) ?>" class="comment-form">
        <!--Création de la zone d'écriture pour les commentaire ainsi que pour l'url de l'image  -->
        
          <div class="form-group">
          <label for="exampleFormControlTextarea1" >Entrer votre commentaire:</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" style="width: 20%;" rows="3" name="commentaire" type="required"> déposer votre Commentaire</textarea>
          </div>
        

        {{ csrf_field() }}
        <input class="form-control mr-sm-2 url " type="text"  style="width: 20%;margin-bottom: 1%;" name="url" placeholder="déposer votre url pour imager cet événement">
        <p class="form-submit">
          <input name="envoie" type="submit"  class="submit" value="Envoyer"><br><br>
        </p>
      </form><br><br><br><br><br><br><br><br><br><br><br><br>

    </div>
  </section>


  <br>
  <br>

</form>
<br><br><br><br><br><br><br><br><br><br><br><br>


</main>
@endsection
@section('script')
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js%22%3E"</script>
  
    $(function() {
      $(".popup").click(function() {
        $(this).toggleClass("background");

      });

    });

//  $('#envoielike').click(function(){
    //var php = "<?php //echo $tavariable; ?>";
//    console.log(php);
//    $.ajax({
//    url : 'http://localhost:8000/like', // La ressource ciblée
//    type : 'GET', // Le type de la requête HTTP.
//    data : 'utilisateur=',
//    success:
//    function(retour){
    
//      console.log(retour);
//    }
// });
  </script>

@endsection