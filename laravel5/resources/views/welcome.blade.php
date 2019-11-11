@extends('default')

<!doctype html>

@section('title')
CESI
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
                                <li><a class="active" href="index.html">Home</a></li>
                                <li><a href="about.html">Activités</a></li>
                                <li><a href="Practice.html">Boutique</a></li>
                                <li><a href="#">Login/Register</a></li>
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

@section('content')
<!-- <div class="flex-center position-ref full-height">
@if (Route::has('login'))
<div class="top-right links">
@auth
<a href="{{ url('/home') }}">Home</a>
@else
<a href="{{ route('login') }}">Login</a>

@if (Route::has('register'))
<a href="{{ route('register') }}">Register</a>
@endif
@endauth
</div>
@endif
</div> -->
@endsection


@section('section')

<!-- <main>
  <header>
    <h1 style=" font-size: 150%;text-align: center;"><em><u style="text-decoration-color: red;">Page d'accueil : Activités et boutique</u></em></h1>
  </header>
  <div class="container" style="   top: 50%; left: 50%;transform: translate(15%, 15%);   ">
    <div class="row">
      <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="bd-example">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner ">
              <div class="carousel-item active" date-interval="2000">
                <img src="4.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Tesla</h5>
                  <p>description</p>
                </div>
              </div>
              <div class="carousel-item ">
                <img src="5.jpg" class="d-block w-100 ">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Ford</h5>
                  <p>description</p>
                </div>
              </div>
              <div class="carousel-item ">
                <img src="4.jpg" class="d-block w-100 ">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Alfa Romeo</h5>
                  <p>description</p>
                </div>
              </div>
              <div class="carousel-item ">
                <img src="5.jpg" class="d-block w-100 ">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Alfa Romeo</h5>
                  <p>description</p>
                </div>
              </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>


      <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="bd-example">
          <div id="carouselExampleCaptions2" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions2" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions2" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions2" data-slide-to="2"></li>
              <li data-target="#carouselExampleCaptions2" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner ">
              <div class="carousel-item active" date-interval="2000">
                <img src="4.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Tesla</h5>
                  <p>description</p>
                </div>
              </div>
              <div class="carousel-item ">
                <img src="5.jpg" class="d-block w-100 ">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Ford</h5>
                  <p>description</p>
                </div>
              </div>
              <div class="carousel-item ">
                <img src="4.jpg" class="d-block w-100 ">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Alfa Romeo</h5>
                  <p>description</p>
                </div>
              </div>
              <div class="carousel-item ">
                <img src="5.jpg" class="d-block w-100 ">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Alfa Romeo</h5>
                  <p>description</p>
                </div>
              </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions2" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions2" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
  </br>



</main> -->

@endsection
