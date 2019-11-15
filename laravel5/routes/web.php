<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {

    return view('welcome');
});

Route::get('/Article', function () {
	return view('Article');
});

Route::get('/shop', function () {
	return view('shop');
});
Route::get('/Panier', function () {
	return view('panier');
});


Route::get('/Activite2','ActiviteController@index');
Route::post('/test','ActiviteController@quantity');
Route::post('/allImg','ActiviteController@all');

Route::get('/list',function(){
	$activites =App\Activite::all();
	return view ('BDD', [
		'activites'=> $activites,
	]);
});



Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/legalnotices', function () {
    return view('legalnotices');
});

Route::get('/activities', function () {
    return view('activities');
});

/*Shop*/

Route::get('/shop', 'ProductsController@index');


Route::get('/activites', function () {
    return view('activities');
});

Route::get('/footer', function () {
    return view('footer');
});

Route::get('/cart', 'ProductsController@cart');


Route::get('add-to-cart/{id}', 'ProductsController@addToCart');


Route::get('/test', function () {
    return view('test');
});

Route::get('/activitie', function () {
    return view('activitie');
});

Route::get('/connexion', function () {
    return view('scriptConnexion');
});

Route::get('/admingestion', function () {
    return view('admin');
});

Route::patch('update-cart', 'ProductsController@update');

Route::delete('remove-from-cart', 'ProductsController@remove');

Route::post('/loginscript', 'LoginRegister@login');
Route::post('/registerscript', 'LoginRegister@register');
Route::get('/logout', 'LoginRegister@logout');

//AdminRoutes:
Route::post('/deleteUser', 'adminFunctions@delete');
Route::post('/editUser', 'adminFunctions@locationModification');
Route::post('/getUser', 'adminFunctions@userGetData');
