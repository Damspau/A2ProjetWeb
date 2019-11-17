<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use DB;

class bdefonctions extends Controller
{
    public function addactivite()
    {

    

      if (Session::get('rang')==2 || Session::get('rang')==4 )
      {
      $titre=$_POST['titre'];
      $description=$_POST['description'];
      $date=$_POST['date'];
      $location=$_POST['Localisation'];
      $idUser=Session::get('idUser');
      DB::table('actives')->insert(
  			[
  				'idUser' => $idUser,
          'nomActivite' => $titre,
          'descriptionActivite' => $description,
          'dateActivite' => $date,
          'localisation' => $location,
  			]);





      $response="Activitée ajotuée avec succès !";
    }

    else {
      $response=" Erreur vous n'avez pas le droit d'accéder a cette fonctinonnalité ";
    }

      return view('bdegestion')->with('response', $response);
    }

    public function deletecomment($idComment)
    {
      if (Session::get('rang')==2 || Session::get('rang')==2 )
      {

        DB::table('commentaire')
      ->where([
          ['idCommentaire', $idComment]])->delete();




      $response="Commentaire supprimé avec succès !";
    }

    else {
      $response=" Erreur vous n'avez pas le droit d'accéder a cette fonctinonnalité ";
    }

      return view('bdegestion')->with('response', $response);

    }


}
