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

Route::get('/login', function () {
    return view('login');
});

Route::get('/legalnotices', function () {
    return view('legalnotices');
});

Route::get('/legalnotices', function () {
    return view('legalnotices');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/boutique', function () {
    return view('shop');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/activites', function () {
    return view('activities');
});

Route::get('/footer', function () {
    return view('footer');
});

Route::get('/nav', function () {
    return view('nav');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/activitie', function () {
    return view('activitie');
});
