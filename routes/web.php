<?php

use Illuminate\Support\Facades\Route;

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

// dd(app());

Route::get('/', function () {
    return view('index');
});

Route::view('/2527119e__index', '2527119e__index');
Route::view('/0a8d3ef2__about', '0a8d3ef2__about');
Route::view('/7db8ffdc__branding', '7db8ffdc__branding');
Route::view('/d750f2b0__creatives', 'd750f2b0__creatives');
Route::view('/b360936a__digital-marketing', 'b360936a__digital-marketing');
Route::view('/8513497e__application-development', '8513497e__application-development');
Route::view('/8ca789a9__portfolio', '8ca789a9__portfolio');
Route::view('/568b236b__contact', '568b236b__contact');
Route::view('/390967a3__product-development', '390967a3__product-development');