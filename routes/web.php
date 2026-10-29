<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])
    ->name('home');

// Rutas para las operaciones CRUD de productos
Route::resource('products', ProductController::class)
    ->middleware('auth');

Route::redirect('/dashboard', '/home')
    ->middleware('auth');