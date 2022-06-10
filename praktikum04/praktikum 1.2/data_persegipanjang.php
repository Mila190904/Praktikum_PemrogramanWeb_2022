<?php
// Memanggil class_persegipanjang.php
require_once 'class_persegipanjang.php';

$persegi = new PersegiPanjang();
echo "Menghitung Luas dan Keliling Persegi Panjang";
echo "<br/>";

// Menghitung Luas Persegi Panjang
echo "<br/> Luas Persegi Panjang adalah = " .$persegi -> getluasper();
echo "<br/> Keliling Persegi Panjang adalah = " .$persegi -> getkelilingper();

?>