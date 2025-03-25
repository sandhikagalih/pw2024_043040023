<?php
// Menghitung volume 2 kubus
// diketahui sisi kubus a & kubus b
// $sisi_a = 9;
// $sisi_b = 4;
// // hitung volume kubus a
// $volume_a = $sisi_a * $sisi_a * $sisi_a;
// // hitung volume kubus b
// $volume_b = $sisi_b * $sisi_b * $sisi_b;
// // jumlahkan keduanya
// $total_volume_ab = $volume_a + $volume_b;
// // cetak hasilnya ke layar
// echo $total_volume_ab;

function hitung_volume_dua_kubus($a, $b)
{
  return $a * $a * $a + $b * $b * $b;
}
echo "Total volume kubus 9 & 4: ";
echo hitung_volume_dua_kubus(9, 4);
echo "<br>";
echo "Total volume kubus 10 & 15: ";
echo hitung_volume_dua_kubus(10, 15);
