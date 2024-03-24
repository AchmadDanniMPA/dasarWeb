<?php 
$pesan = "Gnalam kera Ayas";
$pesanPerKata = explode(" ", $pesan);
$pesanPerKata = array_map(fn($pesan)=> strrev($pesan), $pesanPerKata);
$pesan = implode(" ", $pesanPerKata);
echo $pesan."<br>";
?>