@extends('default')



@section('title')
Admin / BDE
@endsection


@section('nav')


                <li><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="{{ url('/activities') }}">Activités</a></li>
                <li><a href="{{ url('/shop') }}">Boutique</a></li>


@endsection

@section('section')

<?php
if (Session::get('rang')>1){



    if (isset($response))
    {
      echo "<div class=\"alert alert-success\" role=\"alert\">".$response."</div>";
    }
    if (isset($send))
    {
      echo "<div class=\"alert alert-info\" role=\"alert\"> Informations utilisateur: </br>Rang: ".$send[0]." </br>Username: ".$send[1]. "</br>Nom: ".$send[2]." </br>Prenom: ".$send[3]." </br>Iduser: ".$send[4]."</div>";
    }

    if (isset($erreur))
      {
        echo "<div class=\"alert alert-danger\" role=\"alert\">
      ".$erreur."
      </div>";
      }

    ?>

<br>
<br>

<h1><u>Admin : </u></h1>


<h5>Gestion : </h5>
<button type="button" class="btn btn-info" onclick="window.location='{{ url('/bdegestion') }}';">Gestion bde</button>

<?php  if (Session::get('rang')>3)
{ ?>

<div class="container" style="text-align:left;">
  <section>
    <div id="container">
      <a class="hiddenanchor" id="todelete"></a>
      <div id="wrapper">
        <div id="loginform" class="animate form">
          <h5><u>Supprimer un utilisateur </u></h5>
          <form method="post" action="{{ url('/deleteUser') }}" autocomplete="on">
            {{ csrf_field() }}
            <br>
            <br>
            <p>
              <label for="username" class="uname" data-icon="u"> Email utilisateur a Supprimer: </label>
              <input id="username" name="pseudo" required="required" type="text" placeholder="email" />
            </p>
            <p>
              <label for="password" class="youpasswd" data-icon="p"> Mot de passe Admin: </label>
              <input id="password" name="motDePasse" required="required" type="password" placeholder="motdepasse" />
            </p>
            <p class="login button">
              <input type="submit" value="Supprimer" onclick=""/>
            </p>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
<?php }
 if (Session::get('rang')>1)
{ ?>
<!-- Modifier la localisation d'un utilisateur : -->

<div class="container" style="text-align:left;">
  <section>
    <div id="container1">
      <a class="hiddenanchor" id="toregister"></a>
      <a class="hiddenanchor" id="tologin"></a>
      <div id="wrapper">
        <div id="localisationUtilisateur" class="animate form">
          <h5><u>Modifier la localisation d'un utilisateur </u></h5>
          <form method="post" action="{{ url('/editUser') }}" autocomplete="on">
            {{ csrf_field() }}
            <br>
            <br>
            <p>
              <label for="username" class="uname" data-icon="u"> Email utilisateur a modifier: </label>
              <input id="email" name="email" required="required" type="text" placeholder="email" />
            </p>
            <p>
              <label for="passwordmodifier" class="youpasswd" data-icon="p"> Mot de passe Gestion: </label>
              <input id="passwordmodifier" name="motDePasse" required="required" type="password" placeholder="motdepasse" />
            </p>
            <p>
              <label for="location" class="uname" data-icon="p"> Location: </label>
              <input id="location" name="location" required="required" type="required" placeholder="Location" />
            </p>
            <p class="login button">
              <input type="submit" value="Modifier" onclick=""/>
            </p>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Obtenir les informations d'un utiilisateur : -->

<div class="container" style="text-align:left;">
  <section>
    <div id="container2">
      <a class="hiddenanchor" id="toregister"></a>
      <a class="hiddenanchor" id="tologin"></a>
      <div id="wrapper">
        <div id="login" class="animate form">
          <h5><u>Obtenir les informations d'un utilisateur </u></h5>
          <form method="post" action="{{ url('/getUser') }}" autocomplete="on">
            {{ csrf_field() }}
            <br>
            <br>
            <p>
              <label for="username" class="uname" data-icon="u"> Email utilisateur pour obtenir des informations: </label>
              <input id="emailget" name="email" required="required" type="text" placeholder="email" />
            </p>
            <p class="login button">
              <input type="submit" value="Obtenir" onclick=""/>
            </p>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>

<?php
}

?>
@endsection
