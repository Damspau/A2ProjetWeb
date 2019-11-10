@extends('default')

@section('title')
CESI Register
@endsection



@section('header')




<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img class="w-25 p-0" src="https://arras.cesi.fr/wp-content/uploads/sites/9/2019/05/Cesi_Logo_INGENIEUR_RVB-HD-500x296.jpg"></a>
  <button class="navbar-toggler mr-2 custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-2">
      <li class="nav-item">
        <a class="nav-link mr-2" href="#">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Activités</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Boutique</a>
      </li>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Connection/Inscription<span class="sr-only">(current)</span></a>
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
@endsection