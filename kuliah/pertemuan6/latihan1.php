<?php
// Membuat Array
$hari = array('Senin', 'Selasa', 'Rabu');
$bulan = ['Januari', 'Februari', 'Maret'];
$myArray = ['Sandhika', 39, true];

// Mencetak / Menampilkan Array
// Menampilkan seluruh isi (hanya untuk debugging)
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
// Gunakan echo jika ingin mencetak 1 elemen (menggunakan index)
echo $hari[2];
echo "<br>";
echo $myArray[0];
echo "<hr>";

// Menambah isi array
// gunakan []
$hari[] = 'Kamis';
$hari[] = "Jum'at";
$bulan[] = 'April';
print_r($hari);
echo "<br>";
print_r($bulan);
