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
    function index($username, $mail, $prix){

    $users = DB::table('users')->select('idArticle', 'quantity')->where('username', '=', $username)->get();
    $products = Product::all();


      $data = array(
        'username' => $username,
        'mail' => $mail,
        'prix' => $prix
      );

      Mail::to("bde.cesi@viacesi.fr")->send(new SendMail($data));

      return redirect()->back()->with('success', "Mail envoyé $username !  votre adresse prise en compte : $mail ");
    }
}
