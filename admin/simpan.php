<?php

include "koneksi.php";

$nama = $_POST['nama'];
$model = $_POST['model'];
$harga = $_POST['harga'];

$query = "INSERT INTO pelanggan(nama,model_rambut,harga)
VALUES('$nama','$model','$harga')";

mysqli_query($conn,$query);

header("location:tampil.php");

include "../app/Pelanggan.php";

use App\Pelanggan;

$pelanggan = new Pelanggan($conn);

$data = [
    "nama" => $_POST['nama'],
    "model_rambut" => $_POST['model_rambut'],
    "harga" => $_POST['harga']
];

$pelanggan->simpan($data);

header("location:tampil.php");
?>