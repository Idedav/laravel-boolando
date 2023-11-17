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
    return view('home');
});

Route::get('/favourites', function () {
    return view('favourites');
})->name('favourites');

Route::get('/user', function () {

    $name = 'Ugo';
    $lastname = 'De Ughi';
    $email = 'ugo.deughi@gmail.com';
    $adress = 'Via dei pascoli, 88';
    return view('user', compact('name', 'lastname', 'email', 'adress'));
})->name('user');
