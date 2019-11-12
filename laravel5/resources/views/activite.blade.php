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
  }
  .rounded{
    float: left;
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

  .fa-heart:hover{
    color: #d63031;
  }

  .fa-heart{
    color: #636e72;
    margin: margin-right;
  }
  .commentaire{
    top: 50%; left: 50%;
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

      <h1 >Nom Activite <button type="button"  class="fas fa-heart coeur"> 1</button></h1>

    </div>
  </section>
  <img class="rounded" src="6.jpg" >
  <img class="rounded" src="6.jpg" >
  <img class="rounded" src="6.jpg" >

  <p><u>Présentation : </u></p>
  
  <p><span>Matériel:Polyester.Manches Longues.Blouson Style Militaire Classique pour Automne Manteau Homme Hommes Veste Simili Cuir Côtelé Cuir Véritable Blouson Transition Moto Coton Blouson Homme Veste Homme Homme Veste Mont Blouson Homme Veste à Capuche Homme Blousons et Vestes Doudoune Homme Veste Militaire Style Armée Classique Veste pour Homme Veste Coupe vent Imperméable Homme Veste de survêtement pour homme veste de sport Sport Loisirs Fermeture Éclair Homme Classique Style rétro Patches Flight Jacket Veste.
  </span></p><br>
  <p><span>➤Occasion: idéal pour la vie quotidienne, fête, plage, vacances, école, t-shirts occasionnels match parfait avec un jean, un legging ou un pantalon shorts.Haute qualité / mode / pas cher / chic / cadeau pour la Saint Valentin / offrez à votre ami, collègue / cadeau pour mère / offrez-vous également le meilleur cadeau .</span></p><br>
  <p><u>Ouverture : </u></p>
  <p><span>➤Occasion: idéal pour la vie quotidienne, fête, plage, vacances, école, t-shirts occasionnels match parfait avec un jean, un legging ou un pantalon shorts.Haute qualité / mode / pas cher / chic / cadeau pour la Saint Valentin / offrez à votre ami, collègue / cadeau pour mère / offrez-vous également le meilleur cadeau .</span></p><br>
  <p><u>Qualification : </u></p>
  <p><span>➤Occasion: idéal pour la vie quotidienne, fête, plage, vacances, école, t-shirts occasionnels match parfait avec un jean, un legging ou un pantalon shorts.Haute qualité / mode / pas cher / chic / cadeau pour la Saint Valentin / offrez à votre ami, collègue / cadeau pour mère / offrez-vous également le meilleur cadeau .</span></p><br>
  <p><u>Localisation : </u></p>
  <p><span>➤Occasion: idéal pour la vie quotidienne, fête, plage, vacances, école, t-shirts occasionnels match parfait avec un jean, un legging ou un pantalon shorts.Haute qualité / mode / pas cher / chic / cadeau pour la Saint Valentin / offrez à votre ami, collègue / cadeau pour mère / offrez-vous également le meilleur cadeau .</span></p><br>


  <form name="inscription" class="commentaire" method="post" action="saisie">

   Entrez votre commentaire :<input type="text" placeholder="saisier votre commentaire" /> <br/>

   <input type="submit" name="valider" value="Envoyer"/>

 </form>


</main>

@endsection