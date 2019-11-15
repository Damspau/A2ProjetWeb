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
Admin / BDE
@endsection

@section('header')


                <li><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="{{ url('/activities') }}">Activités</a></li>
                <li><a href="{{ url('/shop') }}">Boutique</a></li>


@endsection

@section('section')

<?php
if (Session::get('rang')==2 || Session::get('rang')==4 ){

  ?>






<br>
<br>
<h1><u>Gestion des activitées: </u></h1>
<?php

    if (isset($response))
    {
      echo "<div class=\"alert alert-success\" role=\"alert\">".$response."</div>";
    }
    ?>

<div class="container" style="text-align:left;">
  <section>
    <div id="container1">

      <a class="hiddenanchor" id="tologin"></a>
      <div id="wrapper">
        <div id="localisationUtilisateur" class="animate form">
          <h5><u>Ajouter une activité </u></h5>
          <form method="post" action="{{ url('/addactivite') }}" autocomplete="on">
            {{ csrf_field() }}

            <br>
            <br>
            <p>
              <label for="titre" class="uname" data-icon="u"> Titre: </label>
              <input id="titre" name="titre" required="required" type="required" placeholder="titre" />
            </p>
            <p>
              <label for="Localisation" class="youpasswd" data-icon="p"> Localisation: </label>
              <input id="Localisation" name="Localisation" required="required" type="required" placeholder="Localisation" />
            </p>
            <p>
              <label for="date" class="uname" data-icon="p"> Date: </label>
              <input id="date" name="date" required="required" type="required" placeholder="date" />
            </p>


              <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
              </div>

              					{{ csrf_field() }}


              <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
              			</div>








        </div>
      </div>
    </div>
  </section>
</div>














<?php
}
else {

}
?>
@endsection
