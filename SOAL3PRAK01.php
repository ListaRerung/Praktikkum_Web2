<?php
echo "Suhu dalam format celcius"; 
echo "<br>";
$celcius= 37.841;

echo "Celcius ke Reamur";
echo "<br>";
$reamur = 4/5*$celcius;
$hasilr = sprintf('%.4f',$reamur);
echo "Jumlah: $hasilr";

echo "<br>";

echo "Celcius ke Fahrenheit";
echo "<br>";
$fahrenheit = (9/5)*$celcius+32;
$hasilf = sprintf('%.4f',$fahrenheit);
echo "Jumlah: $hasilf";

echo "<br>";

echo "Celcius ke Kelvin";
echo "<br>";
$kelvin = $celcius+273;
$hasilk = sprintf('%.4f',$kelvin);
echo "Jumlah: $hasilk";


?>


    