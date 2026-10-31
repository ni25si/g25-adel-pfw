<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\KurirController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: ' . $param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: ' . $param1;
});

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/matakuliah/show/{param1?}', function ($param1 = '') {
    return 'Anda mengakses matakuliah ' . $param1;
});

Route::get('/matakuliah/{param1}', [MatakuliahController::class, 'show']);

Route::post('/question', [QuestionController::class, 'store'])->name('question.store');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

// Route Group Admin (Mencegah 404 saat mengakses /admin/menu, /admin/pelanggan, dll)
Route::prefix('admin')->group(function () {
    Route::resource('pelanggan', PelangganController::class);
    Route::resource('menu', MenuController::class);
    Route::resource('kurir', KurirController::class);
    Route::resource('user', UserController::class);
    Route::get('/pesanan', [AdminController::class, 'index']);
    Route::get('/laporan', [AdminController::class, 'index']);
    Route::get('/pengaturan', [AdminController::class, 'index']);
});

// Route Standar
Route::resource('pelanggan', PelangganController::class);
Route::resource('menu', MenuController::class);
Route::resource('kurir', KurirController::class);
Route::resource('user', UserController::class);

// Route Guest & Auth (Soal 1 & Soal 2)
Route::get('/', [GuestController::class, 'home'])->name('guest.home');
Route::get('/guest', [GuestController::class, 'home']);
Route::get('/auth', [GuestController::class, 'loginForm'])->name('guest.login');
Route::post('/auth', [GuestController::class, 'loginProcess'])->name('guest.login.process');
Route::get('/register', [GuestController::class, 'registerForm'])->name('guest.register');