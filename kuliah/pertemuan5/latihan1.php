<?php
// 1.Membuat Array
$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret", "April", "Mei"];
$mahasiswa = ["Sandika", 3.1, false];



// 2.Mencetak isi Array
// Mencetak 1 Nilai pada Array,Menggunakan index
// index dimulai dari 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mahasiswa[1];
echo "<br>", "<hr>";

// Cetak semua isi Array
// var_dump() atau print_r()
// digunakan saat debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($mahasiswa);
echo "<hr>";



// 3.Memanipulasi isi Array
// Menambah Isi Array
// di akhir: [] atau array_push()
$hari[] = "Kamis";
$hari[] = "Jum'at";
print_r($hari);
echo "<br>";
array_push($bulan, "Juni", "Juli", "Agustus");
print_r($bulan);
echo "<br>";

// di awal: array_unshift()
array_unshift($mahasiswa, "233040152");
print_r($mahasiswa);
echo "<hr>";

// Menghapus isi Array
// di belakang: array_pop();
// di depan: array_shift();
array_pop($hari);
array_shift($bulan);
print_r($hari);
echo "<br>";
print_r($bulan);