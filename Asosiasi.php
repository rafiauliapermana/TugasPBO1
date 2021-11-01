<!-- Nama   : Rafi Aulia Permana -->
<!-- NIM    : 20051397071 -->
<!-- Prodi  : D4 Manajemen Informatika (2020A) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Association</title>
</head>
<body>

<?php
// Association Bidirectional
class Dosen {
    public $namaDosen;
    function namadosen($a){
        $this->nama_dosen=$a;
    }
}

class Mahasiswa extends Dosen {
    public $namaMahasiswa;
    function namamahasiswa($b){
        $this->nama_mahasiswa=$b;
    }
}

    $hasil= new mahasiswa;

    $hasil->namadosen("Pak Salamun");
    $hasil->namamahasiswa("Rafi Aulia Permana");

    echo "Dosen = " .$hasil->nama_dosen. "<br/>"; 
    echo "Nama Mahasiswa = " .$hasil->nama_mahasiswa; 

?>
</body>
</html>