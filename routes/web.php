<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SavingController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.landing');
});

Route::get('/register', [RegisterController::class, 'showRegisterView']);

Route::get('/login', [LoginController::class, 'showLoginView'])->name('login');

Route::post('/reg', [RegisterController::class, 'register']);

Route::post('/log', [LoginController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [LoginController::class, 'logout']);
    Route::get('/leaderboard/data', [LeaderboardController::class, 'showLeaderboard'])->name('leaderboard.data');
    Route::get('/leaderboard', function () {
        return view('leaderboard.leaderboard');
    })->name('leaderboard');
    Route::get('/saving', [SavingController::class, 'showSaving'])->name('saving');
    Route::get('/saving/data', [SavingController::class, 'getData'])->name('saving.data');
    Route::post('/tambah-pemasukan', [SavingController::class, 'tambahPemasukan'])->name('pemasukan');
    Route::post('/buat-pengeluaran', [SavingController::class, 'buatPengeluaran'])->name('pengeluaran');
    Route::get('/hapus-history-pemasukan', [SavingController::class, 'hapusHistoryPemasukan'])->name('hapus.pemasukan');
    Route::get('/hapus-history-pengeluaran', [SavingController::class, 'hapusHistoryPengeluaran'])->name('hapus.pengeluaran');


Route::get('/form-wishlist', [WishlistController::class, 'wishlist'])->name('wishlist');
Route::get('/wishlist', [WishlistController::class, 'showWishlist'])->name('show.wishlist');
Route::post('/create-wishlist', [WishlistController::class, 'createWishlist'])->name('create.wishlist');

Route::get('/wishlist-selesai', [WishlistController::class, 'wishlistSelesai'])->name('wishlist.selesai');
    Route::get('/question1', [QuestionController::class, 'index'])->name('question1');
    Route::post('/answer/{currentQuestion}', [QuestionController::class, 'answer'])->name('answer');
    Route::get('/no-need', [QuestionController::class, 'noNeed'])->name('noNeed');
    Route::get('/question{questionNumber}', [QuestionController::class, 'showQuestion'])->name('showQuestion');
    Route::get('/completed', [QuestionController::class, 'completed'])->name('completed');
});






