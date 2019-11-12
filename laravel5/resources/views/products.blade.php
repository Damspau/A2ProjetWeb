@extends('layoutShop')

@section('head')

<style>
    @media only screen and (min-height: 748px) {
        #idk {
            position: absolute;
        }
    }
</style>

@endsection

@section('title', 'Products')

@section('content')

<div class="container products">

    @if(session('success'))

    <div class="alert alert-success">
        {{ session('success') }}
    </div>

    @endif

    <div class="row">

        @foreach($products as $product)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{ $product->photo }}" style="text-align:center;" width="500" height="300">
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