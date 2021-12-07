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
*/use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicacionController;


Route::get('/', function () {
    return view('prueba');
});
Route::resource('/', HomeController::class);
Route::resource('blog', PostController::class);
Route::resource('publicacion', PublicacionController::class);
Route::resource('prueba',HomeController::class);
Auth::routes();

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');


