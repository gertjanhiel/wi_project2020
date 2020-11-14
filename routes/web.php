<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/about',  [\App\Http\Controllers\PagesController::class, 'getAbout']);

Route::get('/contact', [\App\Http\Controllers\PagesController::class, 'getContact']);

Route::get('/',  [\App\Http\Controllers\PagesController::class, 'getHome']);

Route::get('/welcome',  [\App\Http\Controllers\PagesController::class, 'getWelcome']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
