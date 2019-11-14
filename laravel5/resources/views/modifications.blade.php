@extends('default')

<!doctype html>

@section('head')

<style>
  @media only screen and (min-height: 676px) {
    #idk {
      position: absolute;
    }
  }

  @media only screen and (min-height: 982px) and (max-width:984px) {
    #idk {
      position: absolute;
    }
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

</br>

<a href="{{ url('/shop') }}">
  <button type="button" class="btn btn-primary pull-left">
    <i class="fa fa-shopping-cart" aria-hidden="true"></i>Retourner à la boutique !
  </button>
</a>

</br>

<div id="titre">
  <p>
    <h1 style="text-align:center;"><u>Opérations boutique !</u></h1>
  </p>
</div>

</br>


<!--Opérations possibles----------------->

<!-- Afficher message de succès d'ajout d'un produit dans la boutique   -->
@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div>
@endif

<!--Ajouter produits-------->
<div class="container">
  <section>
    <div id="container" style="text-align:center;">
      <div id="wrapper">
        <div id="add" class="animate form">
          <form method="post" action="{{ url('/addProducts') }}" autocomplete="off">
            {{ csrf_field() }}
            <h3><u>Ajouter un produit : </u></h3>
            <br>
            <p>
              <label for="name" data-icon="n"> Nom du produit : </label>
              <input id="name" name="name" required="required" type="text" placeholder="Nom" />
            </p>
            <p>
              <label for="description" data-icon="d"> Description du produit : </label>
              <input id="description" name="description" required="required" type="text" placeholder="description" />
            </p>
            <p>
              <label for="photo" data-icon="p"> Photo du produit : </label>
              <input id="photo" name="photo" required="required" type="text" placeholder="photo" />
            </p>
            <p>
              <label for="price" data-icon="e"> Prix du produit : </label>
              <input id="price" name="price" required="required" type="number" placeholder="prix" />
            </p>
            <p>
              <input type="submit" value="Ajouter !" />
            </p>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
<!----------------------->

<!--Supprimer produits-------->
<div class="container">
  <section>
    <div id="container" style="text-align:center;">
      <div id="wrapper">
        <div id="add" class="animate form">
          <form method="post" action="{{ url('/delProducts') }}" autocomplete="off">
            {{ csrf_field() }}
            <h3><u>Supprimer un produit : </u></h3>
            <br>
            <p>
              <label for="name" data-icon="n"> Nom du produit : </label>
              <input id="name" name="name" required="required" type="text" placeholder="Nom" />
            </p>
            <p>
              <input type="submit" value="Supprimer !" />
            </p>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
<!----------------------->

<!-------------------------------->

</br>
</br>

@endsection