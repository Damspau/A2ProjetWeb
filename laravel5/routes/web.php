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
    return view('welcome');
});

Route::get('/accueil', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/cgu', function () {
    return view('cgu');
});

Route::get('/credits', function () {
    return view('credits');
});

Route::get('/cgv', function () {
    return view('cgv');
});
Route::get('/credit', function () {
	return view('Crédit');
});

/*Shop*/

Route::get('/shop', 'ProductsController@index');

Route::get('/modifications', function () {
    return view('modifications');
});

Route::get('/ShopCroissant', 'ProductsController@trierCroi');

Route::get('/ShopDecroissant', 'ProductsController@trierDec');

Route::get('/troisMeilleurs', 'ProductsController@troisMeilleurs');

Route::post('/panier', 'ProductsController@cart');

Route::get('/add-to-cart/{id}/{username}', 'ProductsController@addToCart');

Route::post('/resetall', 'ProductsController@resetall');

Route::post('/reset', 'ProductsController@reset');

Route::post('/quantity', 'ProductsController@quantity');

Route::post('/addProducts', 'ProductsController@addProducts');

Route::post('/delProducts', 'ProductsController@delProducts');

Route::post('/commander', 'SendEmailController@index');

// Autocomplete Search Shop

Route::get('autocomplete', 'SearchController@autocomplete')->name('autocomplete');

Route::post('/ShopSearch', 'SearchController@resultSearch');


Route::get('/connexion', function () {
    return view('scriptConnexion');
});

Route::get('/admingestion', function () {
    return view('admin');
});

Route::post('/loginscript', 'LoginRegisterController@login');
Route::post('/registerscript', 'LoginRegisterController@register');
Route::get('/logout', 'LoginRegisterController@logout');

//AdminRoutes:
Route::post('/deleteUser', 'adminFunctions@delete');
Route::post('/editUser', 'adminFunctions@locationModification');
Route::post('/getUser', 'adminFunctions@userGetData');

//Ativites:

Route::get('/Activite/{id}', 'ActiviteController@index');


Route::get('/like/{id}', 'ActiviteController@like');

Route::post('/deleteComm', 'ActiviteController@deleteComm');

Route::post('/insert/{id}', 'ActiviteController@insert');

Route::get('/activities', 'ActivitiesController@home');

//bdegestion
Route::post('/addactivite','bdefonctions@addactivite');
Route::get('/deletecomment','bdefonctions@deletecomment');
Route::get('uploadfile','bdefonctions@uploadfile');
Route::get('/bdegestion',function() {
  return view('bdegestion');
});
//personnel
Route::get('/personnelReport{idCommentaire}', 'personnelFunctions@reportComment');
Route::get('/userPdf{idActivite}', 'personnelFunctions@userPdf');
Route::get('/downloadPic{idActivite}', 'personnelFunctions@downloadPic');
