<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "rusdi_barbershop";

$conn = mysqli_connect($host,$user,$password,$database);

if(!$conn){
    die("Koneksi gagal");
}

?>