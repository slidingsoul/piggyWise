<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SavingController;
use App\Http\Controllers\QuestionController;
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
Route::get('/saving/data', [SavingController::class, 'getData'])->name('saving.data');
Route::post('/tambah-pemasukan', [SavingController::class, 'tambahPemasukan'])->name('pemasukan');
Route::post('/buat-pengeluaran', [SavingController::class, 'buatPengeluaran'])->name('pengeluaran');

// Route::resoxurce('pemasukan', ProductController::class);
Route::get('/wishlist', function() {
    return view('wishlist.wishlist');
});
Route::get('/question1', [QuestionController::class, 'index'])->name('question1');
Route::post('/answer/{currentQuestion}', [QuestionController::class, 'answer'])->name('answer');
Route::get('/no-need', [QuestionController::class, 'noNeed'])->name('noNeed');
Route::get('/question{questionNumber}', [QuestionController::class, 'showQuestion'])->name('showQuestion');
Route::get('/completed', [QuestionController::class, 'completed'])->name('completed');
