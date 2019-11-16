<?php

namespace App\Http\Controllers;

use App\Product;
use App\Users;
use DB;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
  // Affichage de tout les produits !--------------------//
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    // Affichage du panier !-------------------------------//
    public function cart()
    {
        $username = $_REQUEST['username'];

        $users = DB::table('users')->select('idArticle', 'quantity')->where('username', '=', $username)->get();
        $products = Product::all();
        return view('cart', compact('users'), compact('products'))->with('username', $username);
    }

    // Ajouter un article au panier !---------------------------//
    public function addToCart($id, $username)
    {

      /*  Vérification id article : */

        $product = Product::find($id);

        if(!$product) {

            abort(404);

        }

        /*  Ajout dans la BDD : */

        if (Users::where('username', '=', $username)->count() > 0){

          if(Users::where('idArticle', '=', $id)->count() > 0){
            //  check if this product exist for this user then increment quantity
            DB::table('users')->where([
                ['username', $username],
                ['idArticle', $id]])
                ->increment('quantity');
          }
          else{
            DB::table('users')->insert([
                ['username' => "$username",
                 'idArticle' => "$id",
                 'quantity' => "1"
               ],
            ]);
          }
        }
        else{
          DB::table('users')->insert([
              ['username' => "$username",
               'idArticle' => "$id",
               'quantity' => "1"
             ],
          ]);
        }
          return redirect()->back()->with('success', 'Produit correctement ajouté au panier !');
    }

    public function trierDec (){
      $products = Product::orderBy('price', 'desc')->get();
      return view('products', compact('products'));
    }

    public function trierCroi (){
      $products = Product::orderBy('price', 'asc')->get();
      return view('products', compact('products'));
    }

    public function troisMeilleurs (){
      $products = Product::orderBy('nbrCommandes', 'desc')->take(3)->get();
      return view('products', compact('products'));
    }

    public function resetall (){

      $username = $_REQUEST['username'];

      DB::table('users')
      ->where('username', $username)->delete();

      // fin du traitement

      $users = DB::table('users')->select('idArticle', 'quantity')->where('username', '=', $username)->get();
      $products = Product::all();

      return view('cart', compact('users'), compact('products'))->with('username', $username);

    }

    public function reset (){

      $username = $_REQUEST['username'];
      $id=$_REQUEST['id'];

      DB::table('users')
      ->where([
          ['username', $username],
          ['idArticle', $id]])->delete();

      // fin du traitement

      $users = DB::table('users')->select('idArticle', 'quantity')->where('username', '=', $username)->get();
      $products = Product::all();

      return view('cart', compact('users'), compact('products'))->with('username', $username);

    }


    public function quantity (){

         $id = $_REQUEST['id'];
         $username = $_REQUEST['username'];
         $thisquantity = $_REQUEST['quantity'];

          //check quantity//
          DB::table('users')->where([
              ['username', $username],
              ['idArticle', $id]])
              ->update(['quantity' => $thisquantity]);

          // fin du traitement

          $users = DB::table('users')->select('idArticle', 'quantity')->where('username', '=', $username)->get();
          $products = Product::all();

          return view('cart', compact('users'), compact('products'))->with('username', $username);
    }

    public function addProducts()
    {
        $thisname = $_POST['name'];
        $thisdescription = $_POST['description'];
        $thisphoto = $_POST['photo'];
        $thisprice = $_POST['price'];

        DB::table('products')->insert(
            ['name' => $thisname,
             'description' => $thisdescription,
             'photo' => $thisphoto,
             'price' => $thisprice,
             'nbrCommandes' => 1
             ]
        );
        return redirect()->back()->with('success', 'Produit correctement ajouté à la BDD !');

    }

    public function delProducts()
    {
        $thisname = $_POST['name'];

        DB::table('products')
        ->where('name', '=', $thisname)->delete();
        return redirect()->back()->with('success', 'Produit correctement supprimé !');
    }

}
