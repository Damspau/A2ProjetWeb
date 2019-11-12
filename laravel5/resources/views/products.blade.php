@extends('layoutShop')

@section('head')

<style>
    @media only screen and (min-height: 1400px) {
        #idk {
            position: absolute;
        }
    }
</style>

@endsection

@section('title', 'Products')

@section('content')


<p>
    <h1 style="text-align: center;"><u style="text-decoration-color:red;">Welcome to our shop : </u></h1>
</p>

</br>
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
                <div class="thumbnail">
                    <img src="{{ $product->photo }}" width="250" height="150">
                    <div class="caption">
                        <h4>{{ $product->name }}</h4>
                        <p>{{ str_limit(strtolower($product->description), 50) }}</p>
                        <p><strong>Price: </strong> {{ $product->price }}$</p>
                        <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                    </div>
                </div>
            </div>
        @endforeach

    </div><!-- End row -->

</div>

@endsection
