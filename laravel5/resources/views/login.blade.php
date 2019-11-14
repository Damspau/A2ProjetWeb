@extends('default')

@section('head')

<style>
  @media only screen and (min-height: 533px) and (min-width:1018px) {
    #idk {
      position: absolute;
    }
  }
</style>

@endsection

@section('title')
CESI Login
@endsection

@section('header')


                <li><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="{{ url('/activities') }}">Activités</a></li>
                <li><a href="{{ url('/shop') }}">Boutique</a></li>
                <li><a class="active" href="{{ url('/login') }}">Login/Register</a></li>

@endsection

@section('section')

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

<br>
<br>

<div class="container" style="text-align:center;">
  <section>
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
              <input id="username" name="pseudo" required="required" type="text" placeholder="email" />
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
  </section>
</div>
</div>

@endsection
