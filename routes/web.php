<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('landing.landing');
});

Route::get('/register', function () {
    return view('register.register');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/leaderboard', function () {
    return view('leaderboard.leaderboard');
});

Route::get('/wishlist', function () {
    return view('wishlist.index');
});
Route::get('/wishlist/view', function () {
    return view('wishlist.view');
});
