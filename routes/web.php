<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { return view('welcome'); })->name('home');

Route::get('/login', function () { return view('login'); })->name('login');
Route::get('/signup', function () { return view('signup'); })->name('signup');
Route::get('/signup', function () { return view('signup'); })->name('signup');
Route::get('/forgot', function () { return view('forgot-password'); })->name('forgot');