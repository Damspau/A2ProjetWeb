<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp;
use Session;

class adminFunctions extends Controller
{
    public function delete()
    {

      $email = $_POST['pseudo'];
      $motDePasse = $_POST['motDePasse'];
      $urlco ="http://localhost:3000/connexDel/". $email . "/" . $motDePasse;
      $client = new GuzzleHttp\Client();
      $response = $client->request('delete', $urlco);


      $response = $response->getBody();
      $response = json_decode ($response, true);

      if ($response['response']=="DELETE successful")
       {

          return view('admin')->with('response', $response['response']);

       }

       else
        {
          $erreur=$response['response'] .": ". $response['error'];
          return view('admin')->with('erreur', $erreur);

        }

    }

    public function locationModification()
    {
      $email = $_POST['email'];
      $motDePasse = $_POST['motDePasse'];
      $location= $_POST['location'];
      $urlco ="http://localhost:3000/connexDel/";
      $client = new GuzzleHttp\Client();
      $response = $client->request('delete', $urlco);


      $response = $response->getBody();
      $response = json_decode ($response, true);

      if ($response['response']=="DELETE successful")
       {

          return view('admin')->with('response', $response['response']);

       }

       else
        {
          $erreur=$response['response'] .": ". $response['error'];
          return view('admin')->with('erreur', $erreur);

        }

    }

    public function userGetData()
    {

    }
}
