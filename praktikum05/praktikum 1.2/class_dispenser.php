<?php
class Dispenser {
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;

    public function isi($vol){
        $this->volume = $vol;
        return $vol;
    }
    public function harga($h){
        $this->hargaSegelas = $h;
        return $h;
    }
    public function volgel($v){
        $this->volumeGelas = $v;
        return $v;
    }
    function nama($n){
        $this->namaMinuman = $n;
        return $n;
    }
}

$gelas1 = new Dispenser();
echo '<br/>Volume galon nya adalah ' .$gelas1 -> isi('100 L ');
echo '<br/>Harga segelasnya adalah ' .$gelas1 -> harga('Rp 3.000 ');
echo '<br/>Anda beli air 1 gelas yang volumenya dengan volume gelas ' .$gelas1 -> volgel('250 ml ');
echo '<br/>Hasil volume sekarang adalah ' .$gelas1 -> nama('750 ml');
?>