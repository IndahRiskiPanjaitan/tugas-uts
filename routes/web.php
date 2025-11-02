<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Halaman utama
Route::get('/', function () {
    return view('halaman');
})->name('halaman');

// Halaman daftar produk
Route::get('/produk', function () {
    $products = [
        ['kode' => 'BRG001', 'nama' => 'Pena', 'jenis' => 'Alat tulis', 'harga' => 20000],
        ['kode' => 'BRG002', 'nama' => 'Buku', 'jenis' => 'Alat tulis', 'harga' => 15000],
    ];

    return view('produk', compact('products'));
})->name('produk');

// Halaman tambah produk
Route::get('/produk/tambah', function () {
    $jenis_produk = ['Pilih Produk', 'Alat tulis', 'Elektronik', 'Sembako'];
    return view('produk_tambah', compact('jenis_produk'));
})->name('produk.tambah');

// Route untuk menyimpan data produk (form POST)
Route::post('/produk/store', function (Request $request) {
    // Contoh logika menyimpan data (sementara belum pakai database)
    $data = [
        'kode' => $request->kode,
        'nama' => $request->nama,
        'jenis' => $request->jenis,
        'harga' => $request->harga,
    ];

    // Kembali ke halaman produk dengan pesan sukses
    return redirect()
        ->route('produk')
        ->with('success', 'Produk berhasil ditambahkan!');
})->name('produk.store');
