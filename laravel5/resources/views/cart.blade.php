@extends('layoutShop')

@section('head')

<style>

 footer{
  position: absolute;
   width: 100%; height: 50px;
   bottom: 0; left: 0; right: 0;
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

@if( Session::get('username') == $username )

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
          <form name="quantity" method="POST" action="{{ url('/quantity') }}">
              @csrf
              <input id="id" name="id" type="hidden" value="{{ $product->id }}">
              <input id="username" name="username" type="hidden" value="{{ Session::get('username') }}">
              <input type="number" id="quantity" name="quantity" value="{{ $client->quantity }}" class="form-control quantity" >
              <input type="submit" name="btn" value="Ok" class="btForm" >
          </form>
      </td>
      <td data-th="Subtotal" class="text-center">${{ $product['price'] * $client->quantity }}</td>
      <td>
        <form name="reset" method="POST" action="{{ url('/reset') }}">
            @csrf
            <input id="id" name="id" type="hidden" value="{{ $product->id }}">
            <input id="username" name="username" type="hidden" value="{{ Session::get('username') }}">
            <input class="btn btn-danger btn-sm remove-from-cart" type="submit" name="btn" value="Delete only this product !" class="btForm" >
        </form>
      </td>
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

      <form name="commander" method="POST" action="{{ url('/commander') }}">
          @csrf
          <input id="prix" name="prix" type="hidden" value="{{ $total }}">
          <input id="username" name="username" type="hidden" value="{{ Session::get('username') }}">
          <input id="mail" name="mail" type="hidden" value="{{ Session::get('email') }}">
          <input class="btn btn-success" type="submit" name="btn" value="Commander !" class="btForm" >
      </form>

    </td>

    <td>
      <!-- Set up a container element for the button -->
          <div id="paypal-button-container"></div>

          <!-- Include the PayPal JavaScript SDK -->
          <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=EUR"></script>

          <script>
              // Render the PayPal button into #paypal-button-container
              paypal.Buttons({

                  // Set up the transaction
                  createOrder: function(data, actions) {
                      return actions.order.create({
                          purchase_units: [{
                              amount: {
                                  value: '{{ $total }}'
                              }
                          }]
                      });
                  },

                  // Finalize the transaction
                  onApprove: function(data, actions) {
                      return actions.order.capture().then(function(details) {
                          // Show a success message to the buyer
                          alert('Transaction completed by ' + details.payer.name.given_name + '!');
                      });
                  }

              }).render('#paypal-button-container');
          </script>

    </td>
    <td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
    <td>

      <form name="reset" method="POST" action="{{ url('/resetall') }}">
          @csrf
          <input id="username" name="username" type="hidden" value="{{ Session::get('username') }}">
          <input class="btn btn-danger btn-sm remove-from-cart" type="submit" name="btn" value="Delete all" class="btForm" >
      </form>

    </td>
</tr>
</tfoot>
</table>




@else

<h1 style="text-align:center;color:red;">Mauvais accès !</h1>

@endif
@endsection
