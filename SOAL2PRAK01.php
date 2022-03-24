<?php
echo "Rumus Tabung"; 
echo "<br>";
$phi = 3.14;
$jari = 4.2;
$tinggi = 5.4;
$jumlah = $phi*$jari*$jari*$tinggi;
$hasil = sprintf('%.3f',$jumlah);


echo "phi: $phi ";
echo "<br>";
echo "Jari jari: $jari";
echo "<br>";
echo "tinggi: $tinggi";
echo "<br>";
echo "Jumlah: $hasil";
?>