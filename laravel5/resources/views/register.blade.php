@extends('default')

@section('head')

<style>
  @media only screen and (min-height: 724px) and (min-width: 1022px) {
    #idk {
      position: absolute;
    }
  }

</style>

@endsection

@section('title')
CESI Register
@endsection

@section('header')


                <li><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="{{ url('/activities') }}">Activités</a></li>
                <li><a href="{{ url('/shop') }}">Boutique</a></li>
                <li><a class="active" href="{{ url('/login') }}">Login/Register</a></li>


@endsection

@section('section')



<br>
<br>

<div class="container" style="text-align:center;">
  <section>
    <div id="container">
      <a class="hiddenanchor" id="toregister"></a>
      <a class="hiddenanchor" id="tologin"></a>
      <div id="wrapper">
        <div id="register" class="animate form">
          <form method="post" action="{{ url('registerscript') }}" autocomplete="on">
            {{ csrf_field() }}
            <h1><u> Inscription : </u></h1>
            </br>
            <p>
              <label for="usernamesignup" class="uname" data-icon="u">Username : </label>
              <input id="usernamesignup" name="username" required="required" type="text" placeholder="username" />
            </p>
            <p>
              <label for="passwordsignup" class="youpasswd" data-icon="p">Password : </label>
              <input id="passwordsignup" name="password" required="required" type="password" placeholder="Mot de passe" />
            </p>
            <p>
              <label for="emailsignup" class="umail" data-icon="m">Email : </label>
              <input id="emailsignup" name="mail" required="required" type="email" placeholder="email" />
            </p>
            <p>
              <label for="locationsignup" class="ulocation" data-icon="l">Localisation : </label>
              <select name="locationsignup" id="pays">
           <option value="france">Pau</option>
           <option value="espagne">Bordeaux</option>
           <option value="italie">Toulouse</option>
           <option value="royaume-uni">Paris</option>
           <option value="canada">Rouen</option>
           <option value="etats-unis">Lyon</option>
           <option value="chine">Arras</option>
           <option value="japon">La Rochelle</option>
       </select>
            </p>
            <p class="signin button">
              <input type="submit" value="S'inscrire" />
            </p>
            <?php

            if (isset($erreur))
            {
              echo "<div class=\"alert alert-danger\" role=\"alert\">
  ".$erreur."
</div>";
            }?>
            <p class="change_link">
              Déjà inscrit ?
              <a href="{{ url('/login') }}" class="to_register"> Connexion </a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
