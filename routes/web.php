<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/bandeja', 'App\Http\Controllers\ProductoController@index')->middleware(['auth'])->name('bandeja'); //[UserController::class, 'index']);

Route::get('/registrar-producto', 'App\Http\Controllers\ProductoController@create')->middleware(['auth'])->name('registrar-producto'); //[UserController::class, 'index']);

Route::post('/store-producto', 'App\Http\Controllers\ProductoController@store')->middleware(
['auth'])->name('store-producto'); //[UserController::class, 'index']);

Route::get('/edit-producto/{id}', 'App\Http\Controllers\ProductoController@edit')->middleware(
['auth'])->name('edit-producto'); //[UserController::class, 'index']);

Route::post('/update-producto/{id}', 'App\Http\Controllers\ProductoController@update')->middleware(
['auth'])->name('update-producto'); //[UserController::class, 'index']);

Route::post('/delete-producto/{id}', 'App\Http\Controllers\ProductoController@destroy')->middleware(
['auth'])->name('delete-producto'); //[UserController::class, 'index']);


Route::match(['get', 'post'], '/usuarios', function(){return 'hola usuarios';})->middleware(['auth'])->name('usuarios'); //[UserController::class, 'index']);

Route::match(['get', 'post'], '/perfiles', function(){return 'hola perfiles';})->middleware(['auth'])->name('perfiles'); //[UserController::class, 'index']);

require __DIR__.'/auth.php';
