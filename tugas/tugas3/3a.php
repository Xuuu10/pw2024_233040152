<?php

echo "<h4>Menghitung Luas Lingkaran</h4>";
function HitungLuasLingkaran($r) {
    $Luas_lingkaran = 3.14*$r**2;
    echo "Jari-Jari = $r"; 
    echo "<br>";
    echo "Luas Lingkaran = $Luas_lingkaran cm<sup>2</sup>.";
    return;
    
}

echo HitungLuasLingkaran(10);
echo "<br><hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4>";
function HitungKelilingLingkaran($r) {
    $keliling_lingkaran = 2*3.14*$r;
    echo "Jari-Jari = $r";
    echo "<br>";
    echo "Keliling Lingkaran = $keliling_lingkaran cm.";
    return;
}

echo HitungKelilingLingkaran(20);
echo "<br><hr>";