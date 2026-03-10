<?php

namespace App;

include "InterfaceData.php";
include "Database.php";

class Pelanggan extends Database implements \InterfaceData {

    public function simpan($data)
    {

        $nama = $data['nama'];
        $model = $data['model_rambut'];
        $harga = $data['harga'];

        mysqli_query($this->conn,"INSERT INTO pelanggan VALUES(null,'$nama','$model','$harga')");

    }

    public function tampil()
    {

        return mysqli_query($this->conn,"SELECT * FROM pelanggan");

    }

    public function hapus($id)
    {

        mysqli_query($this->conn,"DELETE FROM pelanggan WHERE id='$id'");

    }

}

?>