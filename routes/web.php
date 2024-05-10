<?php

use Illuminate\Support\Facades\Route;

//User
Route::get('/', function () {
    return view('dashboard');
});

Route::get('/layanan', function () {
    return view('layanan');
});
Route::get('/rt', function () {
    return view('rt');
});
