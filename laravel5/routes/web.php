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

Route::get('/modifications', function () {
    return view('modifications');
});

/*Shop*/

Route::get('/shop', 'ProductsController@index');


Route::get('/ShopCroissant', 'ProductsController@trierCroi');

Route::get('/ShopDecroissant', 'ProductsController@trierDec');

Route::get('/troisMeilleurs', 'ProductsController@troisMeilleurs');

Route::get('/cart', 'ProductsController@cartVide');

Route::get('/panier/{username}', 'ProductsController@cart');

Route::get('/add-to-cart/{id}/{username}', 'ProductsController@addToCart');

Route::get('/reset/{username}', 'ProductsController@reset');

Route::post('/quantity', 'ProductsController@quantity');

Route::post('/addProducts', 'ProductsController@addProducts');

Route::post('/delProducts', 'ProductsController@delProducts');

Route::get('/cart/{username}/{mail}/{prix}', 'SendEmailController@index');

/*Activities*/

Route::get('/activities', 'ActivitiesController@index');

Route::get('/activites', function () {
    return view('activities');
});

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
