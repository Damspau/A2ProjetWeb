<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp;
use Session;
use Hash;
class LoginRegister extends Controller
{
    public function login()
    {

      $email = $_POST['username'];
      $motDePasse = $_POST['motDePasse'];
      $urlco ="http://localhost:3000/connexDel/". $email . "/" . $motDePasse;
      $client = new GuzzleHttp\Client();
      $response = $client->request('GET', $urlco);


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
          Session::put('email', $email);
          Session::put('idUser', $response['response'][2][0]['idUser']);
          return view('Welcome');

       }

       else
        {
          $erreur="error: wrong email or password";
          return view('login')->with('erreur', $erreur);

        }
    }

    public function register ()
    {
      $email = $_POST['mail'];
      $username=$_POST['username'];
      $password=$_POST['password'];
      $location=$_POST['location'];
      $nom=$_POST['nom'];
      $prenom=$_POST['prenom'];
      $urlco ="http://localhost:3000/data/";
      $client = new GuzzleHttp\Client();
      $response = $client->post($urlco, [GuzzleHttp\RequestOptions::JSON => ['username' => $username, 'password' => $password, 'email' => $email,'location' => $location, 'nom' => $nom, 'prenom' => $prenom ]]);



      $response = $response->getBody();
      $response = json_decode ($response, true);

      if ($response['status']=="200")
       {

          $urlco ="http://localhost:3000/data/". $email ;
          $response = $client->request('GET', $urlco);
          Session::put('login', 'true');
          Session::put('rang', '1');
          Session::put('username', $username);
          Session::put('email', $email);
          Session::put('idUser', $response['response'][2][0]['idUser']);
          return view('Welcome');

       }

       elseif ($response['status']=="404")
       {
         $erreur="error: email arleady registered";
         return view('register')->with('erreur', $erreur);

       }

    }
  public function logout ()
   {
     session()->flush();
     return view('Welcome');
   }
}
