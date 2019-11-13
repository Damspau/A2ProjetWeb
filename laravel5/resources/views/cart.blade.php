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

<table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
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
            <div id="quantity">
            <td data-th="Quantity">
                <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" /></td>
            </div>
            <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
        </tr>
        <script>
            $('#quantity').click(function() {
                location.reload(true);
                console.log('test');
                }); 
        </script>
        @endforeach

        @endif
    </tbody>
    <tfoot>
        <tr>
            <td><a href="{{ url('/shop') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
            <td class="actions" data-th="">
                <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>
            </td>

        </tr>
    </tfoot>
</table>

@endsection


@section('scripts')


<script type="text/javascript">

    $(".remove-from-cart").click(function(e) {
        e.preventDefault();
        window.location.href='{{ url('/reset') }}';
        });


</script>

@endsection