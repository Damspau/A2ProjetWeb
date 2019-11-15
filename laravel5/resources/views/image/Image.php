<?php

include("connexion.php");

$lienImg = $_POST ('lienImage');

$requete="INSERT INTO image VALUES ('','$lienImg')";
$exec=mysql_query($requete);




