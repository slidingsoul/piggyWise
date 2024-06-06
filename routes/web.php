<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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