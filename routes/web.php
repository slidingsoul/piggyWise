<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SavingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.landing');
});

Route::get('/register', [RegisterController::class, 'showRegisterView']);

Route::get('/login', [LoginController::class, 'showLoginView']);

Route::post('/reg', [RegisterController::class, 'register']);

Route::post('/log', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/leaderboard', function () {
    return view('leaderboard.leaderboard');
});

Route::get('/saving', [SavingController::class, 'showSaving'])->name('saving');
Route::post('/tambah-pemasukan', [SavingController::class, 'tambahPemasukan'])->name('pemasukan');
Route::post('/buat-pengeluaran', [SavingController::class, 'buatPengeluaran'])->name('pengeluaran');

// Route::resoxurce('pemasukan', ProductController::class);
