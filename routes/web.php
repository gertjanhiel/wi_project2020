<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/about',  [\App\Http\Controllers\PagesController::class, 'getAbout']);
Route::get('/contact', [\App\Http\Controllers\PagesController::class, 'getContact']);
Route::get('/',  [\App\Http\Controllers\PagesController::class, 'getHome']);
Route::get('/welcome',  [\App\Http\Controllers\PagesController::class, 'getWelcome']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('posts', \App\Http\Controllers\PostController::class);

// php artisan route:list -> geeft lijst weer met alle routes (POST, GET, SHOW, STORE, ... weergeven per command)

// Authentication Routes

Route::middleware('auth')->group(function () {
    Route::get('/auth/login', [App\Http\Controller\Auth\LoginController::class , 'getLogin'])->name('getLogin');
    Route::post('/auth/login',[App\Http\Controller\Auth\LoginController::class , 'postlogin'])->name('postlogin');
    Route::post('/auth/logout',[App\Http\Controller\Auth\LoginController::class , 'postlogout'])->name('postlogout');
});

// Registration Routes


