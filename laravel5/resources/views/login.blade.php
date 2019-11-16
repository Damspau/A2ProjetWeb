@extends('default')

@section('head')

<style>

footer{
  position: absolute;
   width: 100%; height: 50px;
   bottom: 0; left: 0; right: 0;
}

</style>

@endsection

@section('title')
CESI Login
@endsection

@section('nav')

<li><a href="{{ url('/home') }}">Home</a></li>
<li><a href="{{ url('/activities') }}">Activités</a></li>
<li><a href="{{ url('/shop') }}">Boutique</a></li>

@endsection

@section('active')

class="active"

@endsection

@section('section')

<br>
<br>

<div class="container" style="text-align:center;">
    <div id="container">
      <a class="hiddenanchor" id="toregister"></a>
      <a class="hiddenanchor" id="tologin"></a>
      <div id="wrapper">
        <div id="login" class="animate form">
          <form method="post" action="{{ url('/loginscript') }}" autocomplete="on">
            {{ csrf_field() }}
            <h1><u>Connexion : </u></h1>
            <br>
            <br>
            <p>
              <label for="username" class="uname" data-icon="u"> Email : </label>
              <input id="username" name="username" required="required" type="text" placeholder="email" />
            </p>
            <p>
              <label for="password" class="youpasswd" data-icon="p"> Mot de passe : </label>
              <input id="password" name="motDePasse" required="required" type="password" placeholder="motdepasse" />
            </p>

            <p class="login button">
              <input type="submit" value="Connexion" onclick=""/>
            </p>

            <?php

            if (isset($erreur))
            {
              echo "<div class=\"alert alert-danger\" role=\"alert\">
  ".$erreur."
</div>";
            }?>

            <p class="change_link">
              Pas encore inscrit ?
              <a href="{{ url('/register') }}" class="to_register">Inscription</a>
            </p>
          </form>
        </div>
      </div>
    </div>
</div>




@endsection
