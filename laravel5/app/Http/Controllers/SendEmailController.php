<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function index($username, $mail, $prix){

      $data = array(
        'username' => $username,
        'mail' => $mail,
        'prix' => $prix
      );

      Mail::to($mail)->send(new SendMail($data));

      return redirect()->back()->with('success', "Mail $username $mail envoyé !");
    }
}
