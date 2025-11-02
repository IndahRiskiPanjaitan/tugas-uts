<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8fafc;
        }

        /* Navbar */
        .navbar {
            background-color: #ffffff !important;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Tombol Tambah Produk */
        .btn-tambah {
            background-color: #198754 !important;
            color: white !important;
            border: none;
            padding: 6px 15px;
            border-radius: 5px;
            float: right;
        }

        /* === AREA TABEL === */
        .table-container {
            background-color: #dbeafe; /* 🌈 Biru muda untuk area tabel */
            padding: 15px;
            border-radius: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #dbeafe !important; /* 🌈 Biru muda isi tabel */
        }

        table thead {
            background-color: #bfdbfe !important; /* 🌈 Header lebih biru */
            color: #000;
        }

        table th, table td {
            border: 1px solid #cbd5e1;
            padding: 10px;
            text-align: center;
        }

        table tbody tr:nth-child(even) {
            background-color: #e0f2fe !important; /* Baris genap biru muda */
        }

        h2 {
            font-weight: 700;
        }

        .content {
            margin-top: 80px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">UTS Laravel</a>
        </div>
    </nav>

    <!-- Konten -->
    <div class="container content">
        <h2>Halaman Produk</h2>
        <a href="#" class="btn btn-tambah mb-3">Tambah Produk</a>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Kode Produk</th>
                        <th>Nama Produk</th>
                        <th>Jenis Produk</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>BRG001</td>
                        <td>Pena</td>
                        <td>Alat tulis</td>
                        <td>20000</td>
                    </tr>
                    <tr>
                        <td>BRG002</td>
                        <td>Buku</td>
                        <td>Alat tulis</td>
                        <td>15000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
