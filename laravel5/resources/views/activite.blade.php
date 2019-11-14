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

  .true{
    color: red;
  }
  .false{
    color: #636e72;
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

</style>

@endsection


@section('title')
CESI
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

      <script type="text/javascript">

      </script>
      <?php

      $activite = DB::table('actives')
      ->where('id', '=', '1')
      ->get();

      $photo = DB::table('photo')
      ->where([
        ['idActivite', '=', '1'],
        ['idphoto', '=', '1'],
      ])
      ->get();

      $ah = DB::table('photo')
      ->where([
        ['idActivite', '=', '1'],
        ['idphoto', '<>', '1'],
      ])
      ->get();

      $commentaire = DB::table('commentaire')
      ->where('idActivite', '=', '1')
      ->groupBy('idCommentaire')
      ->get();


      ?>


      @foreach($activite as $active)

      <h1 >{{ $active->nomActivite }} <button type="button" onclick="compteur()" class= "fas false fa-heart coeur"><b>{{ $active->likeActivite }} </b></button></h1>
    </div>
    @endforeach
  </section>
  @foreach($photo as $img)

  <img class="rounded" src="{{ $img->url }}" >
  <img class="rounded2" src="{{ $img->url }}" >

  @endforeach
  @foreach($activite as $active)
  <p><u>Présentation : </u></p>
  
  <p >{{ $active->descriptionActivite }}</p><br>

  <p><u>Date :</u> {{ $active->dateActivite }}  </p>
  <p><u>Localisation :</u> {{ $active->localisation }}  </p>
  @endforeach
  <section id="comments">
    <div id="respond" class="comment-respond">
      <h3 id="reply-title" style="text-align:center;" class="comment-reply-title">Commenter l'activité: </h3><br>
      <div style="float: right;width: 60%;height: 530px; margin-right:5%;margin-bottom:5%; border:20% solid #67ab9f; background-color:#b3d8d2;overflow:scroll; ">
        <for>
          <?php
          if (Session::has('username')){
            $username=Sesion::get('username');
          }
          ?>
          <form method="post" action="{{url('/test')}}" class="comment-form">
            {{ csrf_field() }}
            @foreach($ah as $comm)
            
            @foreach($commentaire as $coucou)
            <img class="rounded" src="{{ $comm->url }}">

            <p>Commenter par: $username {{ $coucou->contenuCommentaire }}</p><br>
            @endforeach
            @endforeach


     
            
            <div class="img">
              <img class="rounded" src="{{ $comm->url }}">

            </div>



          </div>

          <p><label for="comment">Entrer votre commentaire:</label></p>
          <input class="form-control mr-sm-2" style="width: 25%;float: left;" type="text" name="commentaire" placeholder="Entrer votre commentaire"></input> 
          <p class="form-submit">
            <input name="envoie" type="submit"  class="submit" value="Envoyer"><br><br>
          </p>

          {{ csrf_field() }}
          <input class="form-control mr-sm-2" style="width: 25%;" type="text" name="url" placeholder="déposer votre url pour imager cet événement">
        </form><br><br><br><br><br><br><br><br><br><br><br><br>

      </div>
    </section>


    <br>
    <br>

  </form>
<form method="get" action="{{url('/all')}}">
   <a href="path_to_file" download="allImg"> <input name="envoie" type="submit"  class="submit" value="Download"></a>
</form>
   





</main>

@endsection