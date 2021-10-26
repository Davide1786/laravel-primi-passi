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

Route::get('/home', function () {
    return view('home');
})->name('homepage');

Route::get('/about', function () {
    return view('about');
})->name('chi_sono');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('book');

Route::get('/contatti', function () {
    return view('contatti');
})->name('contatti');
