<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\questionBoardController;
use App\Http\Controllers\Admin\AdminQuestionController;
use App\Http\Controllers\apiQuestionController;
use App\Models\Question;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('questionBoard')->name('api.questionBoard.')->controller(apiQuestionController::class)->group(function () {
    Route::get('','index')->name('index');    //api.questionBoard.index
    Route::get('{question}','show')->name('show');    //api.questionBoard.index
});