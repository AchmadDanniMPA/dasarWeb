<?php
    $namaHost = "localhost";
    $username = "root";
    $password = "ADMPA321billDanni";
    $database = "prakwebdb";
    try {
        $connect = mysqli_connect($namaHost, $username, $password, $database);
        if ($connect) {
            echo "Koneksi dengan MySQL Berhasil <br>";
        } else {
            echo "Koneksi dengan MySQL Gagal " . mysqli_connect_error();
        }
    } 
    catch (Exception $e) {
        echo $e->getMessage();
    }
?>