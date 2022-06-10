<?php
// Membuat class manusia
class Manusia{
    // Buat Property
    var $nama;
    var $warna;


    // Buatlah method atau function
    function tampilkan_nama(){
        return "Nama saya adalah Mila Lestari";
    }

    function warna_kulit(){
        return "<br/>Kulit saya berwarna coklat";
    }
}

// Buat Objek
$manusia = new Manusia();

echo $manusia -> tampilkan_nama();
echo $manusia -> warna_kulit();
?>