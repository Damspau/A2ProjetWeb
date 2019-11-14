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

Route::get('/legalnotices', function () {
    return view('legalnotices');
});

Route::get('/modifications', function () {
    return view('modifications');
});

/*Shop*/

Route::get('/shop', 'ProductsController@index');

Route::get('/ShopCroissant', 'ProductsController@trierCroi');

Route::get('/ShopDecroissant', 'ProductsController@trierDec');

Route::get('/cart', 'ProductsController@cartVide');

Route::get('/{username}', 'ProductsController@cart');

Route::get('/add-to-cart/{id}/{username}', 'ProductsController@addToCart');

Route::get('/reset/{username}', 'ProductsController@reset');

Route::post('/quantity', 'ProductsController@quantity');

Route::post('/addProducts', 'ProductsController@addProducts');

Route::post('/delProducts', 'ProductsController@delProducts');

Route::get('/cart/{username}/{mail}/{prix}', 'SendEmailController@index');

/*Activities*/

Route::get('/activities', 'ActivitiesController@index');
