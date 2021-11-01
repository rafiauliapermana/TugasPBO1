<!-- Nama   : Rafi Aulia Permana -->
<!-- NIM    : 20051397071 -->
<!-- Prodi  : D4 Manajemen Informatika (2020A) -->
<!-- inheritance komposisi -->
<?php
class orang
    {
     protected $nama;
     protected $umur;
 
     
    public function getNama()
    {
        return $this->nama;
    }
 
    public function setNama($nama)
    {
         $this->nama = $nama;
    }
 
    private function callToPrivateNamaAndumur()
    {
          return "{$this->nama} 'is' {$this->umur} 'years old'.";
     }
 
    protected function callToProtectedNamaAndumur()
    {
        return "{$this->nama} berumur {$this->umur} tahun.";
    }
}
 
class karyawan extends orang
{
  private $pekerjaan;
  private $gaji;
 
    public function getUmur()
     {
         return $this->umur;
     }
 
    public function setUmur($umur)
     {
         $this->umur = $umur;
     }
 
    public function getPekerjaan()
    {
        return $this->pekerjaan;
    }
 
    public function setpekerjaan($pekerjaan)
    {
        $this->pekerjaan = $pekerjaan;
    }
    public function getkaryawan()
    {
        return "{$this->nama} pekerjaannya adalah {$this->pekerjaan} dan gajinya adalah {$this->gaji} .";
    }
    
     public function getGaji()
    {
        return $this->gaji;
    }
    
    public function setGaji($gaji)
    {
        $this->gaji = $gaji;
    }
 
    public function getNamaAndUmur()
    {
        return $this->callToProtectedNamaAndUmur();
    }
}
//inheritance komposisi
$karyawan = new karyawan();
$karyawan->setNama('Rafi Aulia P');
$karyawan->setUmur('20 thn');
$karyawan->setPekerjaan('Konsultan');
$karyawan->setGaji('1000000');

//menampilkan isi property
echo "Nama      :".$karyawan->getNama()."<br/>"; 
echo "Umur      :".$karyawan->getUmur()."<br/>"; 
echo "Pekerjaan :".$karyawan->getPekerjaan()."<br/>"; 
echo "Gaji      :".$karyawan->getGaji()."<br/>"; 
echo $karyawan->getNamaAndUmur()."<br/>"; 
echo $karyawan->getkaryawan(); 
?>
