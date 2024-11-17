<?php


    $cn = new mysqli("localhost","root","","mppl");

    if ($cn->connect_error) {
        die("Koneksi Gagal: " . $cn->connect_error);
    }

?>