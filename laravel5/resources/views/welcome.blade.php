@extends('default')

<!doctype html>

@section('head')

<style>
  @media only screen and (min-height: 676px) {
    #idk {
      position: absolute;
    }
  }

  @media only screen and (min-height: 825px) and (max-width:971px) {
    #idk {
      position: absolute;
    }
  }
</style>

@endsection


@section('title')
CESI
@endsection

@section('nav')

<li><a class="active" href="{{ url('/home') }}">Home</a></li>
<li><a href="{{ url('/activities') }}">Activités</a></li>
<li><a href="{{ url('/shop') }}">Boutique</a></li>
<?php
if (Session::get('login')=='true'){
    echo "<li><a>Bienvenue ".Session::get('username')."</a></li>";
if (Session::get('rang')>1){
  ?>
    <li><a href=" {{ url('/admingestion') }}">BDE/ADMIN</a></li>";
    <?php 
}

}

else
{
echo "<li><a href=\"{{ url('/login') }}\">Login/Register</a></li>";
}

?>


@endsection

@section('section')

</br>
</br>

<div id="titre">
  <p>
    <h1 style="text-align:center;"><u>Bienvenue sur notre site !</u></h1>
  </p>
</div>

</br>
</br>

<!--carousel----------------->

<div class="container" style="align:center;">
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
              <img src="https://cadoetik.org/267160-thickbox_default/kit-crayon-papier-et-marque-page-10-cm-inco.jpg" class="d-block w-100">
              <div class="carousel-caption d-none d-md-block">
                <h5>Tesla</h5>
                <p>description</p>
              </div>
            </div>
            <div class="carousel-item ">
              <img src="https://cadoetik.org/267160-thickbox_default/kit-crayon-papier-et-marque-page-10-cm-inco.jpg" class="d-block w-100 ">
              <div class="carousel-caption d-none d-md-block">
                <h5>Ford</h5>
                <p>description</p>
              </div>
            </div>
            <div class="carousel-item ">
              <img src="https://cadoetik.org/267160-thickbox_default/kit-crayon-papier-et-marque-page-10-cm-inco.jpg" class="d-block w-100 ">
              <div class="carousel-caption d-none d-md-block">
                <h5>Alfa Romeo</h5>
                <p>description</p>
              </div>
            </div>
            <div class="carousel-item ">
              <img src="https://cadoetik.org/267160-thickbox_default/kit-crayon-papier-et-marque-page-10-cm-inco.jpg" class="d-block w-100 ">
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
    </br>
    </br>
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
              <img src="https://cadoetik.org/267160-thickbox_default/kit-crayon-papier-et-marque-page-10-cm-inco.jpg" class="d-block w-100">
              <div class="carousel-caption d-none d-md-block">
                <h5>Tesla</h5>
                <p>description</p>
              </div>
            </div>
            <div class="carousel-item ">
              <img src="https://cadoetik.org/267160-thickbox_default/kit-crayon-papier-et-marque-page-10-cm-inco.jpg" class="d-block w-100 ">
              <div class="carousel-caption d-none d-md-block">
                <h5>Ford</h5>
                <p>description</p>
              </div>
            </div>
            <div class="carousel-item ">
              <img src="https://cadoetik.org/267160-thickbox_default/kit-crayon-papier-et-marque-page-10-cm-inco.jpg" class="d-block w-100 ">
              <div class="carousel-caption d-none d-md-block">
                <h5>Alfa Romeo</h5>
                <p>description</p>
              </div>
            </div>
            <div class="carousel-item ">
              <img src="https://cadoetik.org/267160-thickbox_default/kit-crayon-papier-et-marque-page-10-cm-inco.jpg" class="d-block w-100 ">
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

<!-------------------------------->

</br>
</br>

@endsection
