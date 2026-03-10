<?php

include "koneksi.php";

$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM pelanggan WHERE id='$id'");

header("location:tampil.php");

include "../config/koneksi.php";
include "../app/Pelanggan.php";

use App\Pelanggan;

$pelanggan = new Pelanggan($conn);

$id = $_GET['id'];

$pelanggan->hapus($id);

header("location:tampil.php");
?>