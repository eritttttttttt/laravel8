<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\NewsController;
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


// 前臺

Route::get('/', [FrontController::class, 'index']);


Route::prefix('news')->group(function () {
  Route::get('/', [FrontController::class, 'newsList']);
  Route::get('/{id}', [FrontController::class, 'newsContent']);
});


Route::post('/contact', [FrontController::class, 'contact']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// 後臺

Route::prefix('/admin')->group(function () {
  // news 
  Route::prefix('/news')->group(function(){
    Route::get('/', [NewsController::class, 'index'])->name('news.index');
    Route::get('/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/', [NewsController::class, 'store'])->name('news.store');
    Route::get('/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');
    Route::patch('/{id}', [NewsController::class, 'update'])->name('news.update');

    Route::post('/{id}', [NewsController::class, 'show'])->name('news.show');
    Route::delete('/{id}', [NewsController::class, 'destroy'])->name('news.destroy');

  });


});