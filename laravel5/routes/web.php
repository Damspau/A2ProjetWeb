<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('template');
});
Route::get('/boutique', function () {
    return view('boutique');
});
Route::get('/boutique2', function () {
    return view('panier/boutique2');
});
Route::get('/Article', function () {
    return view('Article');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/Panier', function () {
    return view('panier');
});
Route::get('list','Flight@list');

Route::get('/Article2', function () {
	$flight =App\Flight::All();
    return view('Article2,{
    	
    }');
});