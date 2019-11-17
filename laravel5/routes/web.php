<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */
// Route::get('/', function () {
// 	return view('template');
// });
// Route::get('/boutique', function () {
// 	return view('boutique');
// });
// Route::get('/boutique2', function () {
// 	return view('panier/boutique2');
// });
// Route::get('/Article', function () {
// 	return view('Article');
// });
// Route::get('/shop', function () {
// 	return view('shop');
// });
// Route::get('/Panier', function () {
// 	return view('panier');
// });
// Route::get('/credit', function () {
// 	return view('Crédit');
// });





Route::get('/Activite2/{id}','ActiviteController@index');

Route::post('/deleteComm','ActiviteController@deleteComm');

Route::get('/inscription/{id}','ActiviteController@inscription');







Route::post('/test/{id}','ActiviteController@insert');

Route::get('/like/{id}','ActiviteController@like');
Route::get('/allImg','ActiviteController@img');

// Route::get('/list',function(){
// 	$activites =App\Activite::all();
// 	return view ('BDD', [
// 		'activites'=> $activites,
// 	]);
// });
