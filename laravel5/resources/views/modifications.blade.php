@extends('default')

@section('title')
CESI Custom Shop
@endsection

@section('nav')

<li><a href="{{ url('/home') }}">Home</a></li>
<li><a href="{{ url('/activities') }}">Activités</a></li>
<li><a class="active" href="{{ url('/shop') }}">Boutique</a></li>

@endsection

@section('section')

<!-- Vérifier membre du BDE !
Session::get('rang') == 2 -->

<?php if (Session::get('rang') >= 2) { ?>
  </br>

  <a href="{{ url('/shop') }}">
    <button type="button" class="btn btn-primary pull-left">
      <i class="fa fa-shopping-cart" aria-hidden="true"></i>Retourner à la boutique !
    </button>
  </a>

  </br>

  <div id="titre">
    <p>
      <h1 style="text-align:center;"><u>Opérations boutique !</u></h1>
    </p>
  </div>

  </br>

  <!--Opérations possibles----------------->

  <!-- Afficher message de succès d'ajout d'un produit dans la boutique   -->
  @if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif

  <!--Ajouter produits-------->
  <div class="container">
    <section>
      <div id="container" style="text-align:center;">
        <div id="wrapper">
          <div id="add" class="animate form">
            <form method="post" action="{{ url('/addProducts') }}" autocomplete="off">
              {{ csrf_field() }}
              <h3><u>Ajouter un produit : </u></h3>
              <br>
              <p>
                <label for="name" data-icon="n"> Nom du produit : </label>
                <input id="name" name="name" required="required" type="text" placeholder="Nom" />
              </p>
              <p>
                <label for="description" data-icon="d"> Description du produit : </label>
                <input id="description" name="description" required="required" type="text" placeholder="description" />
              </p>
              <p>
                <label for="photo" data-icon="p"> Photo du produit : </label>
                <input id="photo" name="photo" required="required" type="text" placeholder="photo" />
              </p>
              <p>
                <label for="price" data-icon="e"> Prix du produit : </label>
                <input id="price" name="price" required="required" type="number" placeholder="prix" />
              </p>
              <p>
                <input type="submit" value="Ajouter !" />
              </p>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!----------------------->

  <!--Supprimer produits-------->
  <div class="container">
    <section>
      <div id="container" style="text-align:center;">
        <div id="wrapper">
          <div id="add" class="animate form">
            <form method="post" action="{{ url('/delProducts') }}" autocomplete="off">
              {{ csrf_field() }}
              <h3><u>Supprimer un produit : </u></h3>
              <br>
              <p>
                <label for="name" data-icon="n"> Nom du produit : </label>
                <input id="name" name="name" required="required" type="text" placeholder="Nom" />
              </p>
              <p>
                <input type="submit" value="Supprimer !" />
              </p>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!----------------------->

  <!-------------------------------->

  </br></br></br></br></br>


<?php } else { ?></br></br><h1 style="text-align:center;color:red;"><?php echo 'Pas Membre du BDE pour modifier la boutique !';
} ?></h1> </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>

  @endsection
