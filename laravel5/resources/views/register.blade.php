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
CESI Register
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

<div class="container" style="text-align:center;">
  <section>
    <div id="container">
      <a class="hiddenanchor" id="toregister"></a>
      <a class="hiddenanchor" id="tologin"></a>
      <div id="wrapper">
        <div id="register" class="animate form">
          <form method="post" action="{{ url('/registerscript') }}" autocomplete="on">
            {{ csrf_field() }}
            <h1><u>Inscription : </u></h1>
            <br>
            <br>
            <p>
              <label for="email" class="uname" data-icon="u"> Email : </label>
              <input id="email" name="mail" required="required" type="text" placeholder="email" />
            </p>
            <p>
              <label for="password" class="youpasswd" data-icon="p"> Mot de passe : </label>
              <input id="password" name="password" required="required" type="password" placeholder="motdepasse" />
            </p>
            <p>
              <label for="username" class="youpasswd" data-icon="p"> Username : </label>
              <input id="username" name="username" required="required" type="text" placeholder="username" />
            </p>
            <p>
              <label for="location" class="youpasswd" data-icon="p"> Localisation : </label>
              <input id="location" name="location" required="required" type="text" placeholder="location" />
            </p>
            <p>
              <label for="nom" class="youpasswd" data-icon="p"> Nom : </label>
              <input id="nom" name="nom" required="required" type="text" placeholder="location" />
            </p>
            <p>
              <label for="prenom" class="youpasswd" data-icon="p"> Prenom : </label>
              <input id="prenom" name="prenom" required="required" type="text" placeholder="location" />
            </p>


            <p class="register button">
              <input type="submit" value="Inscription" onclick=""/>
            </p>

          </form>
        </div>
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

        </div>
      </div>
    </div>

@endsection

@section('script')
<script>
    $('#link').on('submit', function (e) {
        e.preventDefault();
        var $form = $(this),
                $select = $form.find('select'),
                links = $select.val();
        if (links.length > 0) {
            for (i in links) {
                link = links[i];
                window.open(link);
            }
        }
    });
</script>
@endsection
