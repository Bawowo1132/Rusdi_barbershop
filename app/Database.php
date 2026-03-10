<?php

namespace App;

class Database {

    public $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

}

?>