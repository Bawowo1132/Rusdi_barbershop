<?php
session_start();

if(!isset($_SESSION['login'])){
    header("location:../login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
<title>Dashboard Admin</title>
<link rel="stylesheet" href="../assets/style.css">
</head>

<body>

<header>
<h1>Dashboard Admin Rusdi Barbershop</h1>
</header>

<nav>
<a href="tambah.php">Tambah Pelanggan</a>
<a href="tampil.php">Data Pelanggan</a>
<a href="../logout.php">Logout</a>
</nav>

<div class="container">

<h2>Selamat Datang Admin</h2>
<p>Silahkan mengelola data pelanggan Rusdi Barbershop.</p>

</div>

</body>
</html>