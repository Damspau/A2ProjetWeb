<?php

namespace App\Http\Controllers;

use App\Product;
use DB;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products', compact('products'));
    }

    public function cart()
    {
        return view('cart');
    }

    public function addToCart($id)
    {
        $product = Product::find($id);

        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $product->price,
                        "photo" => $product->photo
                    ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->photo
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function reset (){
        session()->flush();
        return view('cart');
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

    public function mail($username)
    {
        // $thisname = $_POST['name'];

        return redirect()->back()->with('success', "Mail $username envoyé !");
    }

}
