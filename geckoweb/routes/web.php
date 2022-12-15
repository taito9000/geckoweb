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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/intro', function () {
    return view('intro');
});

Route::get('/howToCare', function () {
    return view('howToCare');
});

Route::get('/questionBoard', function () {
    return view('questionBoard');
});

Route::get('/morph', function () {
    return view('morph');
});