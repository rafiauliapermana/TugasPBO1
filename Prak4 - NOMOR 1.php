<!-- Nama   : Rafi Aulia Permana -->
<!-- NIM    : 20051397071 -->
<!-- Kelas  : D4 Manajemen Informatika (2020A) -->
<!-- Soal NO 1 Praktikum 4-->

<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="No 1.css">
    <title>Tugas Praktikum 4</title>
</head>
<body>
<div class="container">
<h2>Soal NO 1</h2>
<!-- PHP -->
<?php

class Orang{
    protected $nama,$umur;

    public function __construct($nama,$umur){
    $this->nama = $nama;
    $this->umur = $umur;
    }
}

class Dosen extends Orang{
    private $nip;
    
    public function __construct($nama, $umur, $nip){
    $this->nip = $nip;
    parent::__construct($nama, $umur);    
    }

    public function hasil(){
        return $this->nama . ' berumur ' . $this->umur. ' dengan NIP ' . $this->nip;
    }
}

$dosen1 = new Dosen('Rafi', 20, 20051397071); 
$dosen2 = new Dosen('Aulia', 25, 20051397025);
$dosen3 = new Dosen('Permana', 90, 20051397009);

echo $dosen1->hasil();
echo '<br> <br>';
echo $dosen2->hasil();
echo '<br> <br>';
echo $dosen3->hasil();
echo '<br> <br>';

?>
<!-- End Program PHP -->
</div>
</body>
</html>