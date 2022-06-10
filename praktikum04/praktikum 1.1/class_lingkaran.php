<?php
// Membuat class lingkaran
class Lingkaran{
    // buat property
    private $jari;
    const PHI = 3.14;

    // method
    function __construct($r)
    {
        $this -> jari = $r;
    }

    // method getluas untuk menghitung lingkaran
    function getluas(){
        return self:: PHI * $this -> jari * $this -> jari;

    }

    // methode getkeliling untuk menghitung keliling lingkaran
    function getkeliling(){
        return 2 * self:: PHI * $this -> jari;
    }
}

// tutup class
?>