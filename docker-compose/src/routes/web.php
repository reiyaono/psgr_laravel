<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoController;

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

// 第一引数に相対パス、第二引数に関数を指定する
Route::get('/home', [MemoController::class, 'showHome'])->name('memo.home');

Route::get('/submit', [MemoController::class, 'showSubmit'])->name('memo.form');
