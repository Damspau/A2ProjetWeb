<?php


namespace App\Http\Controllers;

use Illuminate\Http\Resquest;
use App\Active;
use DB;

class ActiviteController extends Controller
{
	public function index(){
		$activite = active::all();
		return view('activite',compact('activite'));
		$photo = photo::all();
		return view('activite',compact('activite'));
		$commentaire = commentaire::all();
		return view('activite',compact('activite'));
		$fusion = fusion::all();
		return view('activite',compact('activite'));


	}
	public function quantity (){

		$commentaire = $_POST['commentaire'];
		$url = $_POST['url'];

		DB::table('commentaire')->insert(
			[	
				'idUser' => 7,
			 	'idActivite' => 1,
			 	'contenuCommentaire' => $commentaire, 
			]);
		DB::table('photo')->insert(
			[	
				'idUser' => 7,
			 	'idActivite' => 1,
			 	'url' => $url, 
			]);
return view('activite');
	
}
}