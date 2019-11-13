<?php


namespace App\Http\Controllers;

use Illuminate\Http\Resquest;
use App\Activite;

class ActiviteController extends Controller
{
	public function index(){
		$activite2 = Activite::all();
		return view('1',compact('1'));


	}
}
