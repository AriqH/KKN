<?php

use Illuminate\Support\Facades\Route;

//User
Route::get('/', function () {
    return view('dashboard');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/registrasi', function () {
    return view('registrasi');
});
Route::get('/layanan', function () {
    return view('layanan');
});
Route::get('/pernikahan', function () {
    return view('pernikahan');
});
Route::get('/pindahan', function () {
    return view('pindahan');
});
Route::get('/cerai', function () {
    return view('cerai');
});
Route::get('/kematian', function () {
    return view('kematian');
});
Route::get('/kelahiran', function () {
    return view('kelahiran');
});

//Admin
Route::get('/admin', function () {
    return view('admin.admin_dashboard');
});
Route::get('/tabel_cerai', function () {
    return view('admin.tabel_cerai');
});
