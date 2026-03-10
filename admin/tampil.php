<?php
include "../config/koneksi.php";
include "../app/Pelanggan.php";

use App\Pelanggan;

$pelanggan = new Pelanggan($conn);

$data = $pelanggan->tampil();
?>

<!DOCTYPE html>
<html>

<head>
<title>Data Pelanggan</title>
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

<h2>Data Pelanggan</h2>

<table class="table table-bordered table-striped">

<tr>
<th>ID</th>
<th>Nama</th>
<th>Model Rambut</th>
<th>Harga</th>
<th>Aksi</th>
</tr>

<?php

$data = mysqli_query($conn,"SELECT * FROM pelanggan");

while($d = mysqli_fetch_array($data)){

?>

<tr>

<td><?php echo $d['id']; ?></td>
<td><?php echo $d['nama']; ?></td>
<td><?php echo $d['model_rambut']; ?></td>
<td><?php echo $d['harga']; ?></td>

<td class="action">
<a href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
</td>

</tr>

<?php
}
?>

</table>

</div>

<footer>
Copyright © 2024 Rusdi Barbershop
</footer>

</body>
</html>