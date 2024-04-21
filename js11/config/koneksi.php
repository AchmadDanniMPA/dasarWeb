<?php
date_default_timezone_set('Asia/Jakarta');
$koneksi = mysqli_connect("localhost", "root", "ADMPA321billDanni", "prakwebdb");
if (mysqli_connect_error()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
    
}
?>