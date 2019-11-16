@extends('default')

@section('head')
@yield('head')
@endsection

@section('title')
@yield('title')
@endsection

@section('nav')

<li><a href="{{ url('/home') }}">Home</a></li>
<li><a href="{{ url('/activities') }}">Activités</a></li>
<li><a class="active" href="{{ url('/shop') }}">Boutique</a></li>

@endsection

@section('section')

</br>

<!--Traitements spécifiques pour les membres du BDE
 ils peuvent ajouter, supprimer des produits avec nom,
description et prix   -->
<?php if (Session::get('rang') >= 2) { ?>
    <a href="{{ url('/modifications') }}">
        <button type="button" class="btn btn-primary pull-left">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>Modifier boutique : BDE seulement !
        </button>
    </a>
    <br>

<?php } else { ?><h6 style="text-align:left;color:red;"><?php echo 'Pas Membre du BDE pour modifier la boutique !';
                                                        } ?></h6>

@yield('panier')
    <div class="container page">
        @yield('content')
    </div>

    @endsection
