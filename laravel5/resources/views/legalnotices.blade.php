@extends('default')

@section('title')
CESI Login
@endsection



@section('header')




<nav class="navbar navbar-expand-lg navbar-light" >
  <a class="navbar-brand" href="#"><img class="w-25 p-0" src="https://arras.cesi.fr/wp-content/uploads/sites/9/2019/05/Cesi_Logo_INGENIEUR_RVB-HD-500x296.jpg"></a>
  <button class="navbar-toggler mr-2 custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-2">
      <li class="nav-item">
        <a class="nav-link mr-2" href="#">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Activités</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Boutique</a>
      </li>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Connection/Inscription</a>
    </li>
    <li>
      <form class="form-inline ">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
    </form>
  </li>
</ul>

</div>
</nav>
@endsection

@section('content')
<!-- <div class="flex-center position-ref full-height">
@if (Route::has('login'))
<div class="top-right links">
@auth
<a href="{{ url('/home') }}">Home</a>
@else
<a href="{{ route('login') }}">Login</a>

@if (Route::has('register'))
<a href="{{ route('register') }}">Register</a>
@endif
@endauth
</div>
@endif
</div> -->
@endsection

@section('section')

<p>Éditeur : Association CESI SIREN : 775 722 572 Siège social : 1, avenue du Général de Gaulle Tour PB5 92074 Paris La Défense Tél : 01 44 45 92 00 Fax : 01 44 45 92 98 e-mail : contact@cesi.fr</p>

<p>Développement & hébergement Poisson Bouge, laboratoire de contenus web dynamiques 7, rue des Cadeniers 44000 Nantes 09 51 71 39 39 e-mail : contact@poissonbouge.fr</p>

<p>Respect de la vie privée et collecte des Données Personnelles Soucieux de protéger la vie privée de ses clients, CESI s’engage dans la protection des données personnelles. Une politique sur la protection des données personnelles rappelle nos principes et nos actions visant au respect de la réglementation applicable en matière de protection des données à caractère personnel.</p>

<p>Pour lire l’intégralité de notre politique sur la Protection des données personnelles cliquez-ici</p>

<p>Sécurité Le CESI s’engage à mettre en œuvre tous les moyens nécessaires au bon fonctionnement du site. Cependant, le CESI ne peut pas garantir la continuité absolue de l’accès aux services proposés par le site. Les adhérents sont informés que les informations et services proposés sur le site pourront être interrompus en cas de force majeure et pourront le cas échéant contenir des erreurs techniques.</p>

<p>Utilisation de cookies Des cookies sont utilisés sur nos sites.</p>

<p>Pour plus d’informations, vous pouvez vous référer à la Politique sur le Protection des Données Personnelles en cliquant-ici</p>

<p>Déclarations d’activité CESI SAS – Société par actions simplifiée au capital de 1.1M€ 342 707 502 1, avenue du Général de Gaulle – Tour PB5 – 92074 Paris La Défense Tél. : +33(0) 1 44 19 23 45 – Fax : +33(0) 1 42 50 25 06 Déclaration d’activité enregistrée sous le numéro 11 75 39666 75 auprès du Préfet de la région Ile-de-France. Cet enregistrement ne vaut pas agrément de l’État.</p>

<p>CESI – association loi de 1901 775 722 572 1, avenue du Général de Gaulle – Tour PB5 – 92074 Paris La Défense Tél. : +33(0) 1 44 19 23 45 – Fax : +33(0) 1 42 50 25 06 Déclaration d’activité enregistrée sous le numéro 11 75 47883 75 auprès du Préfet de la région Ile-de-France. Cet enregistrement ne vaut pas agrément de l’État.</p>

@endsection
