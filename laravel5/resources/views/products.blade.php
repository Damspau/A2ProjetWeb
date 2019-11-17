@extends('layoutShop')

@section('head')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

<style>

#search {
  width: 75%;
}

</style>

@endsection

@section('title', 'Products')

@section('panier')

  <?php if (Session::get('rang') >= 2){ ?>

    <form class="pull-right" name="username" method="POST" action="{{ url('/panier') }}">
      @csrf
      <input id="username" name="username" type="hidden" value="{{ Session::get('username') }}">
      <input type="submit" name="btn" value="Afficher votre panier !" class="btForm" />
    </form>

<?php  }else { ?>

    <a href="{{ url('/login') }}">
        <button type="button" class="btn btn-outline-dark pull-right">
          <i class="fa fa-shopping-cart" aria-hidden="true"></i>Non connecté !
        </button>
   </a> <?php } ?>


@endsection

@section('content')

<p>
    <h1 style="text-align: center;"><u style="text-decoration-color:black;">Boutique : </u></h1>
</p>

<!--  autocomplete ! ------------------------------------------------------------------------>

<div class="container ml-2">
  <form class="form-inline" method="POST" action="{{ url('/ShopSearch') }}">
     @csrf
    <input id="search" class="form-control mr-sm-2 typeahead form-control" name="recherche" type="search" placeholder="Rechercher ici un nom de produit !" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
  </form>
</div>

</br>

<!--  options ! ------------------------------------------------------------------------>

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


    <!-- Afficher message de succès d'ajout d'un produit dans le panier   ----------------->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- Affichage des produits : ---------------------------------->
    <div class="row">

        @foreach($products as $product)
        
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="img">
                <img src="{{ $product->photo }}" width="250" height="150">
                <div class="caption">
                    <h4>{{ $product->name }}</h4>
                    <p>{{ str_limit(strtolower($product->description), 50) }}</p>
                    <p><strong>Price: </strong> {{ $product->price }}$</p>
                    <p class="btn-holder"><a href="<?php echo (Session::get('rang') >= 1) ? url('add-to-cart/'. $product->id . '/' . Session::get('username')) : url('/login')?>" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                </div>
            </div>
        </div>
        @endforeach

    </div><!-- End row -->

</div>

<br>
<br>

@endsection

@section('script')

<!-- Autocomplete -->

<script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script>

@endsection
