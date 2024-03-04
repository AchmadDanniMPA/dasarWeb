<?php
$nilaiSiswa=[85,92,78,64,90,55,88,79,70,96];
$nilaiLulus=[];
foreach($nilaiSiswa as $nilai){
    if($nilai>=70){
        $nilaiLulus[]=$nilai;
    }
}
echo"Daftar nilai siswa yang lulus: ".implode(', ',$nilaiLulus);
echo "<br>----------------------------------<br>";
$daftarKaryawan=[
    ['Alice',7],
    ['Bob',3],
    ['Charlie',9],
    ['David',5],
    ['Eva',6],
];
$karyawanLimaTahun=[];
foreach($daftarKaryawan as $karyawan){
    if($karyawan[1]>5){
        $karyawanLimaTahun[]=$karyawan[0];
    }
}
echo"Karyawan pengalaman kerja 5tahun+: ".implode(', ',$karyawanLimaTahun);
echo "<br>----------------------------------<br>";
$daftarNilai=[
    'Matematika'=>[
        ['Alice',85],
        ['Bob',92],
        ['Charlie',78],
    ],
    'Fisika'=>[
        ['Alice',90],
        ['Bob',88],
        ['Charlie',75],
    ],
    'Kimia'=>[
        ['Alice',92],
        ['Bob',80],
        ['Charlie',85],
    ],
];
$mataKuliah='Fisika';
echo"Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";
foreach($daftarNilai[$mataKuliah] as $nilai){
    echo"Nama: {$nilai[0]}, Nilai: {$nilai[1]}<br>";
}
echo "<br>----------------------------------<br>";
$daftarNilai=[
    'Matematika'=>[
        ['Alice',85],
        ['Bob',92],
        ['Charlie',78],
        ['David',64],
        ['Eva',90]
    ],
];
function hitungRataRata($array){
    $total=0;
    foreach($array as $item){
        $total+=$item[1];
    }
    return $total/count($array);
}
function cetakNilaiDiAtasRataRata($daftarNilai){
    foreach($daftarNilai as $mapel=>$siswa){
        $rata_rata_kelas=hitungRataRata($siswa);
        echo "Daftar nilai siswa di mata pelajaran $mapel di atas rata-rata kelas ($rata_rata_kelas):<br>";
        foreach($siswa as $data){
            if($data[1]>$rata_rata_kelas){
                echo "- $data[0]: $data[1]<br>";
            }
        }
        echo "<br>";
    }
}
cetakNilaiDiAtasRataRata($daftarNilai);
echo "<br>----------------------------------<br>";
?>