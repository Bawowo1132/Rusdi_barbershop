<!DOCTYPE html>
<html>

<head>
<title>Tambah Pelanggan</title>
<link rel="stylesheet" href="../assets/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<header>
<h1>Rusdi Barbershop</h1>
</header>

<nav>
<a href="dashboard.php">Home</a>
<a href="tambah.php">Tambah Pelanggan</a>
<a href="tampil.php">Data Pelanggan</a>
</nav>

<div class="container mt-5">

<h2>Tambah Pelanggan</h2>

<form action="simpan.php" method="POST">

<div class="mb-3">
<label>Nama Pelanggan</label>
<input type="text" name="nama" class="form-control">
</div>

<div class="mb-3">
<label>Model Rambut</label>
<input type="text" name="model" class="form-control">
</div>

<div class="mb-3">
<label>Harga</label>
<input type="number" name="harga" class="form-control">
</div>

<button class="btn btn-success">Simpan</button>

</form>

</div>

<footer>
Copyright © 2024 Rusdi Barbershop
</footer>

</body>
</html>