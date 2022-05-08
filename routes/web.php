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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');


Route::get('/dodaj', [App\Http\Controllers\HomeController::class, 'dodaj'])->name('dodaj');
Route::post('/zapisz', [App\Http\Controllers\HomeController::class, 'save'])->name('save');


Route::post('/zapisznone', [App\Http\Controllers\HomeController::class, 'savenone'])->name('savenone');

Route::get('/error', [App\Http\Controllers\HomeController::class, 'error'])->name('error');
Route::get('/serror', [App\Http\Controllers\HomeController::class, 'serror'])->name('serror');
Route::post('/blad', [App\Http\Controllers\HomeController::class, 'saveerror'])->name('saveerror');

Route::get('/acceptkursy', [App\Http\Controllers\HomeController::class, 'acceptkursy'])->name('acceptkursy');
Route::get('/kursy', [App\Http\Controllers\HomeController::class, 'kursy'])->name('kursy');
Route::get('/show', [App\Http\Controllers\HomeController::class, 'show'])->name('show');
Route::get('/bought', [App\Http\Controllers\HomeController::class, 'bought'])->name('bought');
Route::get('/buy', [App\Http\Controllers\HomeController::class, 'buy'])->name('buy');

Route::get('/search', [App\Http\Controllers\KursFilters::class, 'search'])->name('search');


Route::get('/delete', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete');
Route::get('/return', [App\Http\Controllers\HomeController::class, 'return'])->name('return');
//  Route::get('/register', [App\Http\Controllers\HomeController::class, 'haveregister'])->name('auth.login');
//  Route::get('/login', [App\Http\Controllers\HomeController::class, 'havelogin'])->name('auth.register');
