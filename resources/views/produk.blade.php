@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="fw-bold mb-4">Form Tambah Produk</h2>

    <form action="{{ route('produk.store') }}" method="POST" class="shadow p-4 rounded bg-white">
        @csrf
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="kode_produk" class="form-label">Kode Produk</label>
                <input type="text" name="kode_produk" id="kode_produk" class="form-control" placeholder="Input Kode Produk" required>
            </div>
            <div class="col-md-4">
                <label for="nama_produk" class="form-label">Nama Produk</label>
                <input type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Input Nama Produk" required>
            </div>
            <div class="col-md-4">
                <label for="jenis_produk" class="form-label">Jenis Produk</label>
                <select name="jenis_produk" id="jenis_produk" class="form-select" required>
                    <option value="">Pilih Produk</option>
                    <option value="Alat Tulis">Alat Tulis</option>
                    <option value="Elektronik">Elektronik</option>
                    <option value="Sembako">Sembako</option>
                    <option value="Pakaian">Pakaian</option>
                    <option value="Makanan">Makanan</option>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" name="harga" id="harga" class="form-control" placeholder="Input Harga" required>
            </div>
            <div class="col-md-6">
                <label for="stok" class="form-label">Stok Produk</label>
                <input type="number" name="stok" id="stok" class="form-control" placeholder="Input Jumlah Stok" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi Produk</label>
            <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control" placeholder="Tulis deskripsi produk..."></textarea>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-success px-4">Simpan</button>
            <a href="{{ route('produk.index') }}" class="btn btn-secondary px-4">Batal</a>
        </div>
    </form>
</div>
@endsection
