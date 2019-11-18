<?php


namespace App\Http\Controllers;

use Illuminate\Http\Resquest;
use App\Active;
use DB;

class ActiviteController extends Controller
{
	public function index($id){

		$activite = DB::table('actives')
		->where('id', '=', $id)
		->get();

		$photo = DB::table('photocomm')
		->where([
			['idActivite', '=', $id],
			['rangUser', '>=', 3],
		])
		->get();

		$photocom = DB::table('photocomm')
		->where([
			['idActivite', '=', $id],
			['rangUser', '<', 3],
		])
		->get();

		return view('activite', compact('activite', 'photo', 'photocomm'))->with('id',$id);

	}
	public function catalogue(){

		$activite = DB::table('actives')
		->get();

		return view('allactivities', compact('activite'));

	}

	public function insert ($id){

		$commentaire = $_POST['commentaire'];
		$url = $_POST['url'];
		DB::table('photocomm')->insert(
			[
				'RangUser' => 1,
				'idActivite' => $id,
				'url' => $url,
				'contenuCommentaire' => $commentaire,


			]);

		$activite = DB::table('actives')
		->where('id', '=', $id)
		->get();

		$photo = DB::table('photocomm')
		->where([
			['idActivite', '=', $id],
			['rangUser', '>=', 3],
		])
		->get();

		$photocom = DB::table('photocomm')
		->where([
			['idActivite', '=', $id],
			['rangUser', '<', 3],
		])
		->get();

		return view('activite', compact('activite', 'photo', 'photocom'))->with('id',$id);

	}

public function deleteComm()
    {
        $id = $_POST['id'];

        DB::table('photocomm')
        ->where('idPhotoComm', '=', $id)->delete();

		$activite = DB::table('actives')
		->where('id', '=', $id)
		->get();

		$photo = DB::table('photocomm')
		->where([
			['idActivite', '=', $id],
			['rangUser', '>=', 3],
		])
		->get();

		$photocom = DB::table('photocomm')
		->where([
			['idActivite', '=', $id],
			['rangUser', '<', 3],
		])
		->get();

		return view('activite', compact('activite', 'photo', 'photocom'))->with('id',$id);

	}

	public function like ($id){


	// DB::table('like')->increment('Like');

	// 		$count=  DB::table('like')
	// 		->select('Like')
	// 		->where('idActivite','=',$id,)

	// 	return view('activite');

	}
}
