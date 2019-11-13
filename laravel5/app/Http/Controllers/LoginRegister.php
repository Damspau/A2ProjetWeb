<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp;
use Session;
class LoginRegister extends Controller
{
    public function login()
    {
      //$email = "tre@jesuisunfilsdepute.fr";
      $email = $_POST['pseudo'];
      $motDePasse = $_POST['motDePasse'];
      $urlco ="http://localhost:3000/connexDel/". $email . "/" . $motDePasse;
      $client = new GuzzleHttp\Client();
      $response = $client->request('GET', $urlco);
      $valeur = Session::get('clef');

      $response = $response->getBody();
      $response = json_decode ($response, true);

      if ($response['response']=="login successful")
       {

         $urlco ="http://localhost:3000/data/". $email ;
         $client = new GuzzleHttp\Client();
         $response = $client->request('GET', $urlco);

          $response=json_decode ($response->getBody(), true);






          Session::put('login', 'true');
          Session::put('rang', $response['response'][1][0]['idrang']);
          Session::put('username', $response['response'][2][0]['username']);
          return view('Welcome');

       }

       else
        {
          return view('login');

        }
    }

    public function register ()
    {

    }
}
