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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('dashboard', 'DashboardController@get');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'get'])->name('dashboard');
Route::get('/categories', [App\Http\Controllers\CategoriesController::class, 'Categories'])->name('categories');
Route::post('/create_category', [App\Http\Controllers\CategoriesController::class, 'create_category'])->name('create_category');

Route::get('/runners', [App\Http\Controllers\RunnersController::class, 'getRunners'])->name('runners');
Route::post('/create_runner', [App\Http\Controllers\RunnersController::class, 'create_runner'])->name('create_runner');

