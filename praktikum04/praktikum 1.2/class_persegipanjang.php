<?php
// Membuat Class Persegi Panjang
class PersegiPanjang{
    // Membuat Property
    private $panjang;
    private $lebar;

    // Method
    function __construct()
    {
        $this -> panjang = 10;
        $this -> lebar = 5;
    }

    // Method getluas untuk menghitung persegi panjang
    function getluasper(){
        return $this -> panjang * $this -> lebar;
    }

    function getkelilingper(){
        return 2 * $this -> panjang * $this -> lebar;
    }

}
?>