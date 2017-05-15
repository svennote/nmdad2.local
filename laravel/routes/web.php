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
    return view('home');
});


Route::get('/profiel', function () {
    return view('profiel');
});

Route::get('/verkiezing', function () {
    return view('verkiezing');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/registreer', function () {
    return view('registreer');
});

Route::get('/oldtimer', function () {
    return view('oldtimer');
});

