@extends('default')

<!doctype html>

@section('head')

<style>
  .carousel-inner img {
    margin: auto;
  }

  .carousel {
    border: 2px solid #6684BD;
    border-radius: 5px;
  }

  ol.carousel-indicators li,
  ol.carousel-indicators li.active {
    background: #95a5a6;
  }

  ol.carousel-indicators li.active {
    background: #6684BD;
  }

  .text {
    font-size: 140%;
    color: #FF00D1;
    font-weight: bold;
  }
</style>

@endsection


@section('title')
CESI accueil
@endsection

@section('nav')

<li><a class="active" href="{{ url('/home') }}">Home</a></li>
<li><a href="{{ url('/activities') }}">Activités</a></li>
<li><a href="{{ url('/shop') }}">Boutique</a></li>


@endsection

@section('section')

</br>

<div id="titre">
  <p>
    <h1 style="text-align:center;"><u>Bienvenue sur notre site !</u></h1>
  </p>
</div>

</br>

<div class="text-center">

  <a href="{{ url('/activities') }}">
    <button type="button" class="btn btn-outline-dark">
      Voir nos activités !
    </button>
  </a>


  <a href="{{ url('/shop') }}">
    <button type="button" class="btn btn-outline-dark">
      <i class="fa fa-shopping-cart" aria-hidden="true"></i>Accéder à notre boutique !
    </button>
  </a>
</div>

</br>
<!--carousel----------------->

<div class="container">
  <div class="row">
    <div class="col-sm-5 col-md-5 col-lg-5">
      <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner ">
            <div class="carousel-item active" date-interval="2000">
              <img src="https://www.intex.fr/shop/1401-large_default/68305np-kayak-challenger-.jpg" class="d-block w-100">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text">Kayak !</h5>
                <p class="text">Fun</p>
              </div>
            </div>
            <div class="carousel-item ">
              <img src="https://contents.mediadecathlon.com/p1666501/800x800/sq/planche_de_surf_rigide_62_egg_900._livree_avec_3_ailerons._olaian_8502007_1666501.jpg?k=8f4e0fccb175d7f6eb2db5462139bcaf" class="d-block w-100 ">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text">Surf !</h5>
                <p class="text">Fun</p>
              </div>
            </div>
            <div class="carousel-item ">
              <img src="https://www.outsideonline.com/sites/default/files/styles/img_600x600/public/2019/09/11/specialized-creo-e-bike_s.jpg?itok=b3ee7mPt" class="d-block w-100 ">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text">Vélo !</h5>
                <p class="text">Fun</p>
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
              <img src="https://www.cadeaux-hightech.fr/wp-content/uploads/2017/06/goodies-publicitaire-station-meteo-couleurs-noir-brillant-cadeaux-hightech.jpg" class="d-block w-100">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text">Clé</h5>
                <p class="text">Goodies</p>
              </div>
            </div>
            <div class="carousel-item ">
              <img src="https://objet-pub-high-tech.com/18225-thickbox_default/support-de-telephone.jpg" class="d-block w-100 ">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text">Support</h5>
                <p class="text">Goodies</p>
              </div>
            </div>
            <div class="carousel-item ">
              <img src="https://uploads.europeansourcing.com/products/371/199782/iCircle-DarkBlue03.jpg" class="d-block w-100 ">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text">Montre</h5>
                <p class="text">description</p>
              </div>
            </div>
            <div class="carousel-item ">
              <img src="https://ae01.alicdn.com/kf/HTB1rNEhcILJ8KJjy0Fnq6AFDpXat/Support-pour-t-l-phone-universel-prise-de-charge-support-pour-t-l-phone-sopport-pour.jpg" class="d-block w-100 ">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text">Support</h5>
                <p class="text">Goodies</p>
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
