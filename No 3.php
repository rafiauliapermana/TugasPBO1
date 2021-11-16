<!-- Nama   : Rafi Aulia Permana -->
<!-- NIM    : 20051397071 -->
<!-- Kelas  : D4 Manajemen Informatika (2020A) -->
<!-- Soal NO 3 Praktikum 4-->

<?php

class Katak{
    protected $umur, $nama;
    public function __construct($umur, $nama){
        $this->umur = $umur;
        $this->nama = $nama;
    }
    public function getUmur(){
        return $this->umur;
    }
    public function getNama(){
        return $this->nama;
    }
    public function caraBergerak(){
        return 'Melompat';
    }
}

class Kecebong extends Katak{
    private $panjangEkor;
    public function __construct($umur, $nama, $ekor){
    $this->panjangEkor = $ekor;
    parent::__construct($umur, $nama);
    }
    public function getpanjangekor(){
        return $this->panjangEkor;
    }
    public function carabergerak(){
        return 'Berenang';
    }
}

$katak = new katak(5, 'Froggy');
$kecebong = new kecebong(5, 'Junior Froggy', 10);

?>