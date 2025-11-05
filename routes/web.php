<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/where', function () {
    return view('where');
})->name('where');

Route::get('/catalog', function () {
    return view('catalog');
})->name('catalog');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');


