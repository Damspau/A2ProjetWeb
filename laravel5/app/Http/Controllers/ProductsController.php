<?php

namespace App\Http\Controllers;

use App\Product;
use App\Users;
use DB;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function cart($username)
    {
        $users = DB::table('users')->select('idArticle', 'quantity')->where('username', '=', $username)->get();
        $products = Product::all();
        return view('cart', compact('users'), compact('products'));
    }

    public function cartVide()
    {
        return view('cart');
    }


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

    public function reset ($username){

      DB::table('users')
      ->where('username', $username)->delete();
      return redirect()->back()->with('success', 'Panier correctement supprimé !');
    }

    public function quantity (){

         $thisid = $_POST['id'];
         $thisquantity = $_POST['quantity'];

                 $cart = session()->get('cart');


          //check quantity//
        if(isset($cart[$thisid])) {

            $cart[$thisid]['quantity'] = $thisquantity;

            session()->put('cart', $cart);
        }
        return view ('cart');
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
             'price' => $thisprice
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
