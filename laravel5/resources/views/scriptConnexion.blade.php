@extends('default')

@section('title')
CESI Login
@endsection

@section('header')



@endsection

@section('section')
<p>
  Login en cours
</p>
<?php
//$pseudo = $_POST['username'];
//$motDePasse = $_POST['password'];
$email = "tre@jesuisunfilsdepute.fr";
$username="bar";
$password="tre";
$location="Pau";
$urlco ="http://localhost:3000/data/";
$client = new GuzzleHttp\Client();
$response = $client->post($urlco, [GuzzleHttp\RequestOptions::JSON => ['username' => $username, 'password' => $password, 'email' => $email,'location' => $location]]);


$response = $response->getBody();
$response = json_decode ($response, true);

if ($response['status']=="200")
 {
  //echo var_dump( $response['response'][0][0]['localisation']);


    Session::put('login', 'true');
    Session::put('rang', '1');
    Session::put('username', 'bar');

 }

 elseif ($response['status']=="404")
 {
   echo "error email arleady registered";
 }



 ?>







@endsection

@section('header')

@section('script')
<script>



</script>

@endsection
