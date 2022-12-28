<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\questionBoardController;
use App\Http\Controllers\Admin\AdminQuestionController;
use App\Models\Question;


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
Route::get('wordDetails', function () {
    return view('pages/wordDetails');
});

Route::get('morph', function () {
    return view('pages/morph');
});


//お問い合わせフォーム
Route::prefix('questionBoard')->name('questionBoard.')->controller(questionBoardController::class)->group(function () {
Route::get('','index')->name('index');    //一覧　questionBoard.index
Route::post('','store')->name('store');; //質問保存 questionBoard.store
Route::get('complete','complete')->name('complete'); //完了画面 questionBoard.complete
Route::get('{question}','show')->name('show');    //質問詳細表示 questionBoard.show
});


// Route::get('questionBoard',[questionBoardController::class,'questionBoard'])->name('questionBoard');

// Route::post('questionBoard', [questionBoardController::class, 'sendMail']);
// Route::get('complete',[questionBoardController::class,'complete'])->name('complete');


// Route::get('/admin/index',[AdminQuestionController::class,'index'])->name('admin.index');;
// Route::get('/admin/edit', [AdminQuestionController::class, 'edit'])->name('admin.create');;
// Route::post('/admin/index', [AdminQuestionController::class, 'store'])->name('admin.store');


//管理画面
Route::prefix('admin/question')->name('admin.')->controller(AdminQuestionController::class)->group(function () {
    Route::get('','index')->name('index');;  //一覧 admin.index
    Route::get('{question}/edit', 'edit')->name('edit'); //詳細 admin.edit
    Route::post('', 'store')->name('store');    //回答保存 admin.store
    Route::delete('{question}', 'destroy')->name('destroy');    //削除 admin.destroy
});

