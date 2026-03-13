<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/guia', function () {
    return view('guide');
})->name('guide');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::middleware('guest:minecraft')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware('auth:minecraft')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/tienda', [ShopController::class, 'index'])->name('shop.index');
    Route::get('/pagos', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/pagos/nuevo', [OrderController::class, 'create'])->name('orders.create');
    Route::post('/pagos', [OrderController::class, 'store'])->name('orders.store');
    Route::get('/api/users/search', [OrderController::class, 'searchUsers'])->name('api.users.search');
});
