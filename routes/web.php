<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KurirController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
| Guest
*/
Route::get('/', function () {
    return view('guest.home');
})->name('home');

Route::get('/guest', function () {
    return view('guest.dashboard');
})->name('guest.index');

Route::get('/auth', [AuthController::class, 'index'])->name('auth.index');
Route::post('/auth', [AuthController::class, 'login'])->name('auth.login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

/*
| Admin
*/
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::resource('menu', MenuController::class);
    Route::resource('pelanggan', PelangganController::class);
    Route::resource('kurir', KurirController::class);
    Route::resource('user', UserController::class);
});
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');
