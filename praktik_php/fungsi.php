<?php
function hitungUmur($thn_lahir, $thn_skr){
    $umur=$thn_skr-$thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam="Salam"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "But you can call me Giorgio.<br/>";
    
    echo "Umur saya adalah ".hitungUmur(1988, 2023)." Tahun";
}
perkenalan("Giovani Giorno")
?>