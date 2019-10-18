<?php
// array

// membuat array
$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$myArr = [123,"tulisan", false];

//  menampilkan array
var_dump($hari);
echo "<br>";

print_r($bulan);
echo "<br>";

// menampilkan single elemen arrray
echo $myArr[1];
echo "<br>";

// menambahkan elemen baru array
$hari[] = "Kamis";
var_dump($hari);
echo "<br>";

?>