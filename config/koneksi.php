<?php

/*
====================================================
File    : koneksi.php
Fungsi  : Menghubungkan program dengan database MySQL
====================================================
*/

// konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "rusdi_barbershop";

// membuat koneksi ke database
$conn = mysqli_connect($host,$user,$password,$database);

// pengecekan koneksi
if(!$conn){
    die("Koneksi gagal");
}

?>