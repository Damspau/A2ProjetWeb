@extends('default')

@section('title')
CESI Login
@endsection

@section('header')

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
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">Activités</a></li>
                <li><a href="Practice.html">Boutique</a></li>
                <li><a href="#">Login/Register</a></li>
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
