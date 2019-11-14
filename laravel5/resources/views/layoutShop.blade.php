@extends('default')

@section('title')
@yield('title')
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
                                <li><a href="{{ url('/home') }}">Home</a></li>
                                <li><a href="{{ url('/activities') }}">Activités</a></li>
                                <li><a class="active" href="{{ url('/shop') }}">Boutique</a></li>
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

<!--Traitements spécifiques pour les membres du BDE
 ils peuvent ajouter, supprimer des produits avec nom,
description et prix   -->
<?php if (Session::get('rang') == 2) { ?>
    <a href="{{ url('/modifications') }}">
        <button type="button" class="btn btn-primary pull-left">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>Modifier boutique : BDE seulement !
        </button>
    </a>
    <br>

  <?php }else { ?><h6 style="text-align:left;color:red;"><?php echo 'Pas Membre du BDE pour modifier la boutique !'; } ?></h6>

      <a href="<?php echo (Session::get('rang') == 2) ? url('/' . Session::get('username')) : url('/login');  ?>">
        <button type="button" class="btn btn-primary pull-right">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>Panier (Sauvegarde automatique si etudiant)
        </button>
    </a>

<div class="container page">
    @yield('content')
</div>

@endsection
