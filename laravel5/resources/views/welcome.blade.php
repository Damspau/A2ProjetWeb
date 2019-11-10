@extends('default')

@section('title')
CESI
@endsection



@section('header')




<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img class="w-25 p-0" src="https://arras.cesi.fr/wp-content/uploads/sites/9/2019/05/Cesi_Logo_INGENIEUR_RVB-HD-500x296.jpg"></a>
  <button class="navbar-toggler mr-2 custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-2">
      <li class="nav-item active">
        <a class="nav-link mr-2" href="#">Accueil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Activités</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Boutique</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="inscriptionConnection.php">Connection/Inscription</a>
      </li>
      <li>
        <form class="form-inline">
          <input class="form-control mr-sm-2" name="recherche" type="search" list="recherche" placeholder="Search" aria-label="Search">

          <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
          <form onsubmit="return validateForm();" class="pure-form autocomplete" style="position: relative;">
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

  </div>
</nav>
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

<main>
  <header>
    <h1 style=" font-size: 150%;text-align: center;"><em><u style="text-decoration-color: red;">Page d'accueil : Activités et boutique</u></em></h1>
  </header>
  <div class="container" style="   top: 50%; left: 50%; 
  transform: translate(10%, 2%);">
    <div class="row">
      <div class="col-sm-5 col-md-5 col-lg-5">
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


      <div class="col-sm-5 col-md-5 col-lg-5">
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



</main>

@endsection