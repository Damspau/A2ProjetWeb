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
      $urlco ="http://localhost:3000/data";
      $client = new GuzzleHttp\Client();
      $response = $client->put($urlco, [GuzzleHttp\RequestOptions::JSON => ['email' => $email, 'location' => $location, 'passwordAdmin' => $motDePasse]]);


      $response = $response->getBody();
      $response = json_decode ($response, true);

      if ($response['response']=="updated successful")
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
      $email = $_POST['email'];
      $urlco ="http://localhost:3000/data/". $email ;
      $client = new GuzzleHttp\Client();
      $response = $client->request('GET', $urlco);

      $response=json_decode ($response->getBody(), true);

      if ($response['response']=="email is not register or is not type correctly")
      {
        $erreur=$response['response'];
        return view('admin')->with('erreur', $erreur);
      }

      else {
        $send = [];
        array_push ($send,$response['response'][1][0]['idrang'],$response['response'][2][0]['username'],$response['response'][2][0]['Nom'],$response['response'][2][0]['Prenom']) ;

        return view('admin')->with('send', $send);
      }

    }
}
