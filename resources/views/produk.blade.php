<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8fafc;
        }

        .form-control, .form-select {
            background-color: #e9f5ff; /* warna biru muda */
            border: 1px solid #b3d8ff;
            transition: 0.3s;
        }

        .form-control:focus, .form-select:focus {
            background-color: #d6eeff;
            border-color: #66b3ff;
            box-shadow: 0 0 0 0.2rem rgba(102,179,255,0.25);
        }

        .card {
            border-radius: 12px;
        }

        .btn-success {
            background-color: #198754;
            border-radius: 8px;
        }

        .btn-success:hover {
            background-color: #157347;
        }

        label {
            font-weight: 600;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-semibold" href="#">UTS Laravel</a>
        </div>
    </nav>

    <!-- Form Section -->
    <div class="container my-5">
        <h2 class="text-center fw-bold mb-4">Form Tambah Produk</h2>

        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
                <form action="#" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Kode Produk</label>
                            <input type="text" name="kode_produk" class="form-control" placeholder="Masukkan kode produk">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" placeholder="Masukkan nama produk">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Jenis Produk</label>
                            <select name="jenis_produk" class="form-select">
                                <option selected disabled>Pilih Produk</option>
                                <option value="Makanan">Makanan</option>
                                <option value="Minuman">Minuman</option>
                                <option value="Elektronik">Elektronik</option>
                                <option value="Pakaian">Pakaian</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Harga</label>
                            <input type="number" name="harga" class="form-control" placeholder="Masukkan harga">
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success px-5">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
