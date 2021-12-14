<?php

use App\Http\Controllers\FrontController;
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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/', 'FrontController@index');
Route::get('/', [FrontController::class, 'index']);
Route::get('/hello/{id}', [FrontController::class, 'hello']);
Route::get('/news', [FrontController::class, 'news']);
Route::get('/news/{id}', [FrontController::class, 'newsDetail' ]);

Route::get('/create-news', [FrontController::class, 'createNewsIndex']);
Route::post('/store-news', [FrontController::class, 'storeNews']);
Route::get('/update-news/{id}', [FrontController::class, 'updateNews']);
Route::get('/destroy-news/{id}', [FrontController::class, 'destroyNews']);



Route::post('/contact', [FrontController::class, 'contact']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
