<?php setcookie('pseudo', 'M@teo21', time() + 365 * 24 * 3600, null, null, false, true); ?>

@extends('layoutShop')

@section('head')

<style>
    @media only screen and (min-height: 603px) {
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

        @if(session('cart'))
        @foreach(session('cart') as $id => $details)

        <?php $total += $details['price'] * $details['quantity'] ?>

        <tr>
            <td data-th="Product">
                <div class="row">
                    <div class="col-sm-3 hidden-xs"><img src="{{ $details['photo'] }}" width="100" height="100" class="img-responsive" /></div>
                    <div class="col-sm-9">
                        <h4 class="nomargin">{{ $details['name'] }}</h4>
                    </div>
                </div>
            </td>
            <td data-th="Price">${{ $details['price'] }}</td>
            <td data-th="Quantity">
                <form name="quantity" method="POST" action="{{ url('quantity') }}">
                    @csrf
                    <input id="id" name="id" type="hidden" value="{{ $id }}">
                    <input type="number" id="quantity" name="quantity" value="{{ $details['quantity'] }}" class="form-control quantity" />
                    <input type="submit" name="btn" value="Ok" class="btForm" />
                </form>
            </td>
            <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
        </tr>
        @endforeach
        @endif

    </tbody>
    <tfoot>
        <tr>
            <td><a href="{{ url('shop') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
            <td><a href="{{ url('reset') }}"><button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button></a></td>
        </tr>
    </tfoot>
</table>



<!-- Session::get('rang') == 1 
Session::get('username')
-->

<a href="<?php echo (true) ? url('cart/' . "test") : url('/login');  ?>">
    <button type="button" class="btn btn-primary pull-right">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i>Passer commande : étudiants connectés seulement !
    </button>
</a>

@endsection


@section('scripts')
@endsection