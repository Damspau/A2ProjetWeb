<?php


namespace App\Http\Controllers;

use Illuminate\Http\Resquest;
use App\Active;

class ActiviteController extends Controller
{
	public function index(){
		$activite = active::all();
		return view('activite',compact('activite'));


	}
}
