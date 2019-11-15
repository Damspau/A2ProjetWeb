<?php


namespace App\Http\Controllers;

use Illuminate\Http\Resquest;
use App\Active;
use DB;

class ActiviteController extends Controller
{
	public function index($id){

		$activite = active::all();
		return view('activite',compact('activite'));
		$photo = photo::all();
		return view('activite',compact('activite'));
		$commentaire = commentaire::all();
		return view('activite',compact('activite'));
		$like = like::all();
		return view('activite',compact('activite'));


	}
	public function index2($id){

		$activite = active::all();
		return view('activite')->with('id',$id);



	}
	public function quantity ($id){

		$commentaire = $_POST['commentaire'];
		$url = $_POST['url'];

		DB::table('commentaire')->insert(
			[
				'idUser' => 7,
			 	'idActivite' => $id,
			 	'contenuCommentaire' => $commentaire,
			]);
		$idPhoto=DB::table('photo')
		->select('idPhoto', '=', '7')
		->Where(
			['idUser','=','7'],
			['idUser','=','idActivite']
		);




		DB::table('photo')->insert(
			[
				'idUser' => 7,
			 	'idActivite' => $id,
			 	'url' => $url,
			]);
		DB::table('commentaire')->insert(
			[
				'idPhoto'=>$idPhoto,

			]);
return view('activite');

}
public function like (){

		DB::table('like')->increment('Like');
		$idUser=1;
		$idActivite=$id;
		$boole=false;





return $test;





}
}
