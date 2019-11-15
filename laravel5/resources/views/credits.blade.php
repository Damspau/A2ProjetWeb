@extends('default')

@section('title')
CESI credits
@endsection

@section('nav')
<li><a href="{{ url('/home') }}">Home</a></li>
<li><a href="{{ url('/activities') }}">Activités</a></li>
<li><a href="{{ url('/shop') }}">Boutique</a></li>
@endsection

@section('section')

<main>
    </br>
    <!--Définition d'un titre en gras souligné  -->
    <h1 class="titre"><u><strong>Crédits :</strong></u></h1>
    <br>
    <!--Mise en place du texte a défilement automatique  -->
    <marquee class="crédit" direction="up" scrollamount="3" height="500">
        <font size="+2"><u>Ce magnifique site web vous a été présenté par notre équipe technique qui est composée de :</u>
            </br>
            </br>
            -><b>Damien</b> à la gestion des données de la base de données nationale...
            </br>
            </br>
            -><b>Maxime</b> au design des pages Web ainsi qu'à la gestion de la boutique...
            </br>
            </br>
            -><b>Charles</b> au design des pages Web ainsi qu'à la gestion de la base de données locale pour les événements...
            </br>
            </br>
            Pour ce projet nous avons travaillé dans les locaux du CESI à l'adresse suivante: 8 Rue des Frères Charles et Alcide d' Orbigny, 64000 Pau</font>
    </marquee>

</main>

@endsection