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
?>
      @foreach($activite as $active)

      <h1 >{{ $active->nomActivite }} <button type="button" onclick="compteur()" class= "fas false fa-heart coeur"><b>{{ $active->likeActivite }} </b></button></h1>
    </div>
  </section>
  <img class="rounded" src="{{ $active->url }}" >

  <p><u>Présentation : </u></p>
  
  <p >{{ $active->descriptionActivite }}</p><br>

  <p><u>Date :</u>{{ $active->dateActivite }}  </p>
  <p><u>Localisation :</u>{{ $active->localisation }}  </p>

  <section id="comments">
    <div id="respond" class="comment-respond">
      <h3 id="reply-title" style="text-align:center;" class="comment-reply-title">Commenter l'activité </h3><br>
      <form method="post" id="commentform" class="comment-form">
        <textarea style="float: right;" cols="90" rows="10"></textarea>

        <p class="form-textarea req"><label for="comment">Entré votre commentaire: </label><textarea name="comment" id="comment"placeholder="saisier votre commentaire" cols="60" rows="5%"></textarea></p>

        <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Envoyer"> <input type="hidden" name="comment_post_ID" value="72408" id="comment_post_ID">
          <input type="hidden" name="comment_parent" id="comment_parent" value="0">
        </p>
      </form>
    </div>
  </section>
  @endforeach
  <br>
  <br>

</form>


</main>

@endsection