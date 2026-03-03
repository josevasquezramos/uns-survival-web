<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/guia', function () {
    return view('guide');
})->name('guide');

Route::get('/tienda', function () {
    return view('shop');
})->name('shop');
