<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class SearchController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function autocomplete(Request $request)
  {
      $data = Product::select("name")
              ->where("name","LIKE","%{$request->input('query')}%")
              ->get();

      return response()->json($data);
  }

  public function resultSearch (){

    $recherche = $_REQUEST['recherche'];

    $products = Product::where('name', $recherche)->get();
    return view('products', compact('products'));
  }
}
