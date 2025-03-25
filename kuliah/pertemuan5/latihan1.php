<?php
echo "waktu saat ini <br>";
echo date("l, j M Y");
echo "<hr>";

echo "detik saat ini <br>";
echo time();
echo "<br>";
echo "detik 1 hari dari sekarang <br>";
echo time() + 60 * 60 * 24;
echo "<hr>";

echo "hari ini:";
echo date("l");
echo "<br>";
echo "100 hari dari sekarang hari: ";
echo date("l", time() + 60 * 60 * 24 * 100);
echo "<hr>";

echo date("l, j M Y G.i s", mktime(10, 0, 0, 10, 20, 2006));
