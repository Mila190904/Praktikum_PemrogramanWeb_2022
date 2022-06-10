<?php
//  Memanggil class_lingkaran.php
require_once 'class_lingkaran.php';
echo "Nilai PHI adalah = " . Lingkaran:: PHI;

$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(4);
echo "<br/>";

// Menghitung luas lingkaran menggunakan fungsi getluas
echo "<br/> Luas Lingkaran 1 adalah = " .$lingkar1 -> getluas();
echo "<br/> Luas Lingkaran 2 adalah = " .$lingkar2 -> getluas();
echo "<br/>";

// Menghitung keliling lingkaran menggunakan fungsi getkeliling
echo "<br/> Keliling Lingkaran 1 adalah = " .$lingkar1 -> getkeliling();
echo "<br/> Keliling Lingkaran 2 adalah = " .$lingkar1 -> getkeliling();
?>