<!-- Nama   : Rafi Aulia Permana -->
<!-- NIM    : 20051397071 -->
<!-- Kelas  : D4 Manajemen Informatika (2020A) -->
<!-- Soal NO 2 Praktikum 5 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 5</title>
</head>
<body>
    <div class="container">
        <h2>Soal No 2</h2>

        <!-- PHP -->
        <?php
class Pegawai
{
	public  $nama;
	public $gaji;
	public	function __construct($nama, $gaji)
	{
		$this->nama = $nama;
		$this->gaji = $gaji;
	}
	public	function infoGaji()
	{
		return $this->gaji;
	}
}
class Manajer extends Pegawai
{
	private $tunjangan;
	public	function __construct($nama, $gaji, $tunjangan)
	{
		parent::__construct($nama, $gaji);
		$this->tunjangan = $tunjangan;
	}
	public	function infoGaji()
	{
		return $this->gaji;
	}
	public	function infoTunjangan()
	{
		return $this->tunjangan;
	}
}
class Programmer extends Pegawai
{
	private $bonus;
	public	function __construct($nama, $gaji, $bonus)
	{
		parent::__construct($nama, $gaji);
		$this->bonus = $bonus;
	}
	public	function infoGaji()
	{
		return $this->gaji;
	}
	public	function infoBonus()
	{
		return $this->bonus;
	}
}
class Bayaran
{
	public function hitungBayaran($peg)
	{
		$uang = $peg->infoGaji();
		
		return $uang;
	}
	public static function main($args)
	{
		echo "Rafi Aulia 20051397071", "\n";
		$man = new Manajer("Permana", 850000, 50);
		$prog = new Programmer("Aulia", 650000, 30);
		$hr = new Bayaran();
		echo "<br> Gaji untuk Manajer Bernama ". $man->nama." : Rp. ".strval($hr->hitungBayaran($man)), "\n";
		echo "<br>Gaji untuk Programmer Bernama ".$prog->nama. " : Rp. ".strval($hr->hitungBayaran($prog)), "\n";
        // echo $man->nama;
	}
}
Bayaran::main(array());
        ?>
        <!-- END PHP  -->
    </div>
</body>
</html>