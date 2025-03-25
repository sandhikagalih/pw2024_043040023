<?php
// $_GET
// variabel superglobals yang bisa isi lewat metoder request GET
// lewat URL

// isset()
// untuk memeriksa apakah sebuah variabel / key sudah dibuat atau belum
// if (isset($_GET['nama'])) {
//   echo "Nama : " . $_GET['nama'];
// } else {
//   echo "Nama : Unknown";
// }

// ternary operator
// untuk membuat if else menjadi ringkas
// echo "Nama: " . (isset($_GET['nama']) ? $_GET['nama'] : 'Unknown');

// null coalescing operator
// untuk membuat isset lebih ringkas
// ??
// echo "Nama: " . ($_GET['nama'] ?? 'Unknown');


echo "nama: " . ($_GET['nama'] ?? 'Unknown');
echo "<br>";
echo "nim: " . ($_GET['nim'] ?? 'Unknown');;
