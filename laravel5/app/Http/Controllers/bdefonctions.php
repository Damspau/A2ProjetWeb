<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use DB;

class bdefonctions extends Controller
{
    public function addactivite()
    {
      $titre=$_POST['titre'];
      $description=$_POST['description'];
      $date=$_POST['date'];
      $location=$_POST['Localisation'];
      DB::table('actives')->insert(
  			[
  				'idUser' => 7,
          'idCommentaire' => 7,
          'idUrl' => 7,
          'nomActivite' => $titre,
          'descriptionActivite' => $description,
          'dateActivite' => $date,
          'localisation' => $location,
  			]);





      $response="Activitée ajotuée avec succès !";
      return view('bdegestion')->with('response', $response);
    }
}
