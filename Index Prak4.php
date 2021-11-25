<?php
    require_once 'No 3.php';
?>

<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Tabel.css">
    <title>Tugas Praktikum 4</title>
</head>
<body>
<h2>Soal NO 3</h2>
<table align="center">

<tr align="cemtar" bgcolor="blue">
    <td>Objek</td>
    <td>Umur</td>  
    <td>Nama</td>  
    <td>Panjang Ekor</td>  
    <td>Cara Bergerak</td>      
</tr>

<tr>
    <td>01</td>
    <td><?=$katak->getUmur() ?> </td>  
    <td><?=$katak->getnama() ?> </td>  
    <td>-</td>  
    <td><?=$katak->carabergerak() ?> </td>      
</tr>

<tr>
    <td>02</td>
    <td><?=$kecebong->getUmur() ?></td>  
    <td><?=$kecebong->getNama() ?></td>  
    <td><?=$kecebong->getpanjangekor() ?></td>  
    <td><?=$kecebong->carabergerak() ?></td>      
</tr>

</table>
</body>
</html>