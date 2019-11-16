<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Product;
use App\Users;
use DB;

class SendEmailController extends Controller
{
    function index(){

      $username = $_REQUEST['username'];
      $prix=$_REQUEST['prix'];
      $mail=$_REQUEST['mail'];

      // Actualisation du nombre de commande !

      $users = DB::table('users')->select('idArticle', 'quantity')->where('username', '=', $username)->get();
      $products = Product::all();

      foreach ($users as $client) {

        foreach($products as $product){

              if ($product->id == $client->idArticle){

                    //  check if this product exist for this user then increment quantity
                    DB::table('products')->where([
                        ['id', $product->id]])
                        ->update(['nbrCommandes' => $client->quantity]);
              }
            }
          }


      // Réinitialisation du panier

      DB::table('users')
      ->where([
          ['username', $username],
          ])->delete();

      // Envoi du mail au BDE

      $data = array(
        'username' => $username,
        'mail' => $mail,
        'prix' => $prix
      );

      Mail::to("bde.cesi@viacesi.fr")->send(new SendMail($data));

      $users = DB::table('users')->select('idArticle', 'quantity')->where('username', '=', $username)->get();
      $products = Product::all();

      return view('cart', compact('users'), compact('products'))->with('username', $username);
    }
}
