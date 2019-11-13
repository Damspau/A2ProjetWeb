
@extends('default')

@section('title')
CESI Login
@endsection

@section('header')

<div class="header-area ">
    <div id="sticky-header" class="main-header-area">
        <div class="container-fluid p-0">
            <div class="row align-items-center justify-content-between no-gutters">
                <div class="col-xl-2 col-lg-2">
                    <div class="logo-img">
                        <a href="index.html">
                            <img class="w-50" src="https://arras.cesi.fr/wp-content/uploads/sites/9/2019/05/Cesi_Logo_INGENIEUR_RVB-HD-500x296.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-8">
                    <div class="main-menu  d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">Activités</a></li>
                                <li><a href="Practice.html">Boutique</a></li>
                                <li><a class="active" href="#">Login/Register</a></li>
                                <li class="mt-2 mb-2">
                                  <form class="form-inline">
                                    <input class="form-control mr-sm-2" name="recherche" type="search" list="recherche" placeholder="Search" aria-label="Search">

                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                                    <form onsubmit="return validateForm();" class="pure-form autocomplete">
                                      <datalist id="recherche">
                                        <a href="">
                                          <option>ezggzrtec</option>
                                        </a>
                                        <a href="">
                                          <option></option>
                                        </a>
                                        <a href="">
                                          <option></option>
                                        </a>
                                        <a href="">
                                          <option></option>
                                        </a>
                                        <a href="">
                                          <option> </option>
                                        </a>
                                        <a href="">
                                          <option> </option>
                                        </a>
                                        <a href="">
                                          <option></option>
                                        </a>
                                        <a href="">
                                          <option></option>
                                        </a>
                                        <a href="">
                                          <option></option>
                                        </a>
                                      </datalist>
                                    </form>
                                  </form>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-2 d-none d-lg-block">
                    <div class="social_media_links">
                        <ul>
                            <li><a target="_blank" href="https://www.facebook.com/CESIingenieurs/"> <i class="fa fa-facebook"></i> </a></li>
                            <li><a target="_blank" href="https://twitter.com/GroupeCESI?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"> <i class="fa fa-twitter"></i> </a></li>
                            <li><a target="_blank" href="https://www.instagram.com/campus_cesi/?hl=fr"> <i class="fa fa-instagram"></i> </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('section')
<p>
  Login en cours
</p>
<?php
//$pseudo = $_POST['username'];
//$motDePasse = $_POST['password'];
$email = "tre@jesuisunfilsdepute.fr";
$motDePasse = "tre";
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

    //echo var_dump( $response['response'][0][0]['localisation']);



    Session::put('login', 'true');
    Session::put('rang', $response['response'][1][0]['idrang']);
    Session::put('username', $response['response'][2][0]['username']);

 }

 else
  {
    echo "wrong password";
  }

 ?>







@endsection

@section('header')

@section('script')
<script>
// jQuery(document).ready(function(){
//     var email = "";
//     var password = "";
//     var result = [];
//     var login = "";
//
//
//     $.ajax({
//        url : 'http://localhost:3000/connexDel/'+ email + '/'+ password, // La ressource ciblée
//        type : 'GET',
//        dataType : 'json',
//        success : function(code_json, statut){
//          for(var i in code_json)
//    result.push([i, code_json [i]]);
//
//          if (result[0]=="status,200")
//          {
//             //var loginArray =[];
//
//             //login = String(result[3]);
//
//             //loginArray=login.split(",");
//             //alert (loginArray[1]);
//             var sendTo = [];
//             $.ajax({
//        url : 'http://localhost:3000/data/'+ email,
//        type : 'GET',
//        dataType : 'json',
//        success : function(code_json2, statut){
//          var result2 = [];
//          var result3 = [];
//          var result4 = [];
//          var idrang = "";
//          var username ="";
//          for(var i in code_json2)
//          {
//            result2.push([i, code_json2 [i]]);
//          }
//          console.log (JSON.stringify(result2[2][1][1][0]));
//
//          console.log (JSON.stringify(result2[2][1][2][0]));
//          //$.post('file.php', {result2[2][1][1][0],result2[2][1][2][0]});
//
//
//
//        },
//        error : function(resultat, statut, erreur){
//               alert(erreur);
//             }
//     });
//
//          }
//
//          else
//          {
//
//          }
//
//      },
//        error : function(resultat, statut, erreur){
//               alert(erreur);
//             }
//     });
//
//
// });


</script>

@endsection
