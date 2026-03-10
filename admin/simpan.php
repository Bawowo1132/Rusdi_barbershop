<?php

include "koneksi.php";

$nama = $_POST['nama'];
$model = $_POST['model'];
$harga = $_POST['harga'];

$query = "INSERT INTO pelanggan(nama,model_rambut,harga)
VALUES('$nama','$model','$harga')";

mysqli_query($conn,$query);

header("location:tampil.php");

?>