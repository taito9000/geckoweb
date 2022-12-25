<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\questionBoardController;

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
    return view('pages/welcome');
});


Route::get('intro', function () {
    return view('pages/intro');
});

Route::get('howToCare', function () {
    return view('pages/howToCare');
});


Route::get('morph', function () {
    return view('pages/morph');
});


//お問い合わせフォーム

Route::get('questionBoard',[questionBoardController::class,'questionBoard'])->name('questionBoard');

Route::post('questionBoard', [questionBoardController::class, 'sendMail']);
Route::get('complete',[questionBoardController::class,'complete'])->name('complete');
