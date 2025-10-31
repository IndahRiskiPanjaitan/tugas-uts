<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* Buat ikon garis tiga manual (selalu tampil) */
    .custom-toggler {
      border: none;
      background: transparent;
      outline: none;
    }

    .custom-toggler-icon {
      width: 24px;
      height: 2px;
      background-color: #000;
      display: block;
      position: relative;
    }

    .custom-toggler-icon::before,
    .custom-toggler-icon::after {
      content: "";
      position: absolute;
      width: 24px;
      height: 2px;
      background-color: #000;
      left: 0;
    }

    .custom-toggler-icon::before {
      top: -7px;
    }

    .custom-toggler-icon::after {
      top: 7px;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">UTS Laravel</a>

      <!-- Tombol garis tiga -->
      <button class="custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="custom-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <!-- Isi Halaman -->
  <div class="container mt-4">
    <h1>Halaman Home</h1>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
