@extends('layoutShop')

@section('head')

<style>

     @media only screen and (min-height: 930px) and (min-width:1309px) {
        #idk {
            position: absolute;
        }
    }

    .head{
      background-color:grey;
    }
</style>


@endsection

@section('title', 'Products')

@section('content')



<p>
    <h1 style="text-align: center;"><u style="text-decoration-color:black;">Boutique : </u></h1>
</p>

    <a href="{{ url('/ShopCroissant') }}">
    <button type="button" class="btn btn-outline-dark">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i>Trier dans l'ordre croissant des prix !
    </button>
  </a>


<a href="{{ url('/ShopDecroissant') }}">
    <button type="button" class="btn btn-outline-dark">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i>Trier dans l'ordre décroissant des prix !
    </button>
</a>

<a href="{{ url('/troisMeilleurs') }}">
    <button type="button" class="btn btn-outline-dark">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i>Trois meilleurs produits ! 
    </button>
</a>

</br>

<div class="container products">


    <!-- Afficher message de succès d'ajout d'un produit dans le panier   -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- Affichage des produits : -->
    <div class="row">

        @foreach($products as $product)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="img">
                <img src="{{ $product->photo }}" width="250" height="150">
                <div class="caption">
                    <h4>{{ $product->name }}</h4>
                    <p>{{ str_limit(strtolower($product->description), 50) }}</p>
                    <p><strong>Price: </strong> {{ $product->price }}$</p>
                    <p class="btn-holder"><a href="<?php echo (Session::get('rang') == 1) ? url('add-to-cart/'. $product->id . '/' . Session::get('username')) : url('/login')?>" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                </div>
            </div>
        </div>
        @endforeach

    </div><!-- End row -->

</div>

<br>
<br>
@endsection
