<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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
Route::get('/about',  [\App\Http\Controllers\PagesController::class, 'getAbout']);
Route::get('/contact', [\App\Http\Controllers\PagesController::class, 'getContact']);
Route::get('/',  [\App\Http\Controllers\PagesController::class, 'getHome']);
Route::get('/welcome',  [\App\Http\Controllers\PagesController::class, 'getWelcome']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('posts', \App\Http\Controllers\PostController::class);

// php artisan route:list -> geeft lijst weer met alle routes (POST, GET, SHOW, STORE, ... weergeven per command)

// Authentication Routes

// Route::namespace('App\Http\Controllers\Auth')->group(function () {
//     Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('auth/login', LoginController::class, '__invoke', 'getLogin');
// Route::post('auth/login', LoginController::class, '__invoke', 'postLogin');
// Route::post('auth/logout', LoginController::class, '__invoke', 'getLogout');
// });

// Registration Routes

Route::middleware('auth')->group(function () {
    Route::get('/auth/login', 'LoginController@getLogin')->name('getLogin');
    Route::post('/auth/login','LoginController@postlogin')->name('postlogin');
    Route::post('/auth/logout','LoginController@postlogout')->name('postlogout');
});
