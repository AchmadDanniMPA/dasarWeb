<?php
$nilaiNumerik=92;
if($nilaiNumerik>=90&&$nilaiNumerik<=100){
    echo"Nilai A";
}elseif($nilaiNumerik>=80&&$nilaiNumerik<90){
    echo "Nilai B";
}elseif($nilaiNumerik>=70&&$nilaiNumerik<80){
    echo "Nilai C";
}else{
    echo "Nilai D";
}
echo"<br>";
echo "----------------------------------<br>";
$jarakSaatIni=0;
$jarakTaget=500;
$peningkatanHarian=30;
$hari=0;
while ($jarakSaatIni<$jarakTaget){
    $jarakSaatIni+=$peningkatanHarian;
    $hari++;
}
echo"Altet memerlukan $hari hari untuk menempuh jarak 500 Km.<br>";
echo "----------------------------------<br>";
$jumlahLahan=10;
$tanamanPerLahan=5;
$buahPerTanaman=10;
$jumlahBuah=0;
for($i=1;$i<$jumlahLahan;$i++){
    $jumlahBuah+=($tanamanPerLahan*$buahPerTanaman);
}
echo "Buah yang terpanen adalah: $jumlahBuah<br>";
echo "----------------------------------<br>";
$skorUjian=[85,92,78,96,88];
$totalSkor=0;
foreach($skorUjian as $skor){
    $totalSkor+=$skor;
}
echo"Total skor: $totalSkor";
echo "<br>----------------------------------<br>";
$nilaiSiswa=[85,92,58,64,90,55,88,79,70,96];
foreach($nilaiSiswa as $nilai){
    if($nilai<60){
        echo"Nilai: $nilai (tidak Lulus)<br>";
        continue;
    }
    echo"Nilai: $nilai (Lulus)<br>";
}
echo "<br>----------------------------------<br>";
$nilai_siswa=[85,92,78,64,90,75,88,79,70,96];
sort($nilai_siswa);
$nilai_siswa=array_slice($nilai_siswa,2,-2);
$total_nilai = array_sum($nilai_siswa);
echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $total_nilai";
echo "<br>----------------------------------<br>";
$harga_awal=120000;
$persentase_diskon=20;
$harga_minimum=100000;
if ($harga_awal>$harga_minimum){
    $diskon=$harga_awal*($persentase_diskon/100);
    $harga_setelah_diskon=$harga_awal-$diskon;
    echo "Harga yang harus dibayar: Rp $harga_setelah_diskon";
}else{
    echo "Harga yang harus dibayar: Rp $harga_awal";
}
echo "<br>----------------------------------<br>";
function hitungSkor($poin){
    $total_skor=$poin;
    $dapat_hadiah=($total_skor>500)?"YA":"TIDAK";
    echo "Total skor pemain adalah: ".$total_skor."<br>";
    echo "Apakah pemain mendapatkan hadiah tambahan? ".$dapat_hadiah;
}
hitungSkor(600);
echo "<br>----------------------------------<br>";
?>