<?php

use Illuminate\Support\Facades\Route;

// Halaman utama Laravel (default)
Route::get('/', function () {
    return view('welcome');
});

// Halaman produk
Route::get('/halaman', function () {
    return view('halaman');
})->name('halaman');
