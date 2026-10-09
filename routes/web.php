<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

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

Route::get('/mahasiswa/{param1}',
[MahasiswaController::class, 'show']);

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/matakuliah/show/{param1?}', function ($param1 = '') {
    return 'Anda mengakses matakuliah ' . $param1;
});

Route::get('/matakuliah/{param1}',
[MatakuliahController::class, 'show']);


Route::post('/question', [QuestionController::class, 'store'])->name('question.store');

Route::get('/guest', function () {
    return view('guest.dashboard');
});

use App\Http\Controllers\AdminController;

Route::get('/admin', [AdminController::class, 'index'])
        ->name('admin.dashboard');