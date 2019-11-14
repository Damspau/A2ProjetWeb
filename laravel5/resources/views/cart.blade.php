@extends('layoutShop')

@section('head')

<style>

     @media only screen and (min-height: 843px) and (min-width:993px) {
        #idk {
            position: absolute;
        }
    }
</style>

@endsection

@section('title', 'Cart')

@section('content')

@if(session('success'))

<div class="alert alert-success">
    {{ session('success') }}
</div>

@endif

<table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
        </tr>
    </thead>
    <tbody>

        <?php $total = 0 ?>

<?php
    foreach ($users as $client) {

      foreach($products as $product){
            if ($product->id == $client->idArticle){
              ?>


  <?php $total += $product['price'] * $client->quantity ?>

  <tr>
      <td data-th="Product">
          <div class="row">
              <div class="col-sm-3 hidden-xs"><img src="{{ $product['photo'] }}" width="100" height="100" class="img-responsive" /></div>
              <div class="col-sm-9">
                  <h4 class="nomargin">{{ $product['name'] }}</h4>
              </div>
          </div>
      </td>
      <td data-th="Price">${{ $product['price'] }}</td>
      <td data-th="Quantity">
          <form name="quantity" method="POST" action="{{ url('quantity') }}">
              @csrf
              <input id="id" name="id" type="hidden" value="{{ $product->id }}">
              <input type="number" id="quantity" name="quantity" value="{{ $client->quantity }}" class="form-control quantity" />
              <input type="submit" name="btn" value="Ok" class="btForm" />
          </form>
      </td>
      <td data-th="Subtotal" class="text-center">${{ $product['price'] * $client->quantity }}</td>
  </tr>
  <?php
          }
      }
    }
?>
</tbody>
<tfoot>
<tr>
    <td><a href="{{ url('/shop') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
    <td colspan="2" class="hidden-xs">

      <a href="<?php echo (Session::get('rang') == 1) ? url('cart/' . Session::get('username') . '/' . Session::get('mail') . '/' . $total) : url('/login');  ?>">

            <button type="button" class="btn btn-primary pull-right">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i> Passer commande : étudiants connectés seulement !
            </button>
      </a>

    </td>
    <td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
    <td><a href="{{ url('/reset/' . Session::get('username')) }}"><button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button></a></td>
</tr>
</tfoot>
</table>


@endsection
