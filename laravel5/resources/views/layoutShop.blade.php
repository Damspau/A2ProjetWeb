@extends('default')

@section('head')
@endsection

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

<body>

    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-sm-12 col-12 main-section">
                <div class="dropdown">
                    <button type="button" class="btn btn-info" data-toggle="dropdown">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count(session('cart')) }}</span>
                    </button>
                    <div class="dropdown-menu">
                        <div class="row total-header-section">
                            <div class="col-lg-6 col-sm-6 col-6">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count(session('cart')) }}</span>
                            </div>

                            <?php $total = 0 ?>
                            @foreach(session('cart') as $id => $details)
                            <?php $total += $details['price'] * $details['quantity'] ?>
                            @endforeach

                            <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                                <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                            </div>
                        </div>

                        @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                        <div class="row cart-detail">
                            <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                <img src="{{ $details['photo'] }}" />
                            </div>
                            <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                <p>{{ $details['name'] }}</p>
                                <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container page">
        @yield('content')
    </div>

    @endsection

    @section('script')
    @yield('scripts')
    @endsection