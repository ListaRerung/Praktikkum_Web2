<!DOCTYPE html>
<html>
<body>
<h1>Output yang diinginkan</h1>
<form action="" method="post">
Nilai <input type="text" name="bilangan"><br>
Dari : <br>
<input type="radio" name="suhu" value="Celcius">Celcius
      <br>
<input type="radio" name="suhu" value="Fahrenheit">Fahrenheit
      <br>
<input type="radio" name="suhu" value="Rheamur">Rheamur
      <br>
<input type="radio" name="suhu" value="Kelvin">Kelvin
      <br>
Ke :<br>
<input type="radio" name="ubah" value="Celcius">Celcius
      <br>
<input type="radio" name="ubah" value="Fahrenheit">Fahrenheit
      <br>
<input type="radio" name="ubah" value="Rheamur">Rheamur
      <br>
<input type="radio" name="ubah" value="Kelvin">Kelvin
      <br>
      <br>
<input type="submit" name="send" value="Konversi">
    
</form>
</body>
</html>

<?php
if(isset($_POST["send"])){
    $bilangan= $_POST["bilangan"];
    $suhu= $_POST["suhu"];
    $ubah= $_POST["ubah"];

    if($suhu == "Celcius"){
        if($ubah == "Celcius"){
            echo "<br>";
            echo "$bilangan C"; }

        elseif($ubah == "Rheamur"){
            $hasil = (4/5)*$bilangan;
            echo "<br>";
            echo"$hasil R";
        }

        elseif($ubah == "Kelvin"){
            $hasil = 273+$bilangan;
            echo "<br>";
            echo"$hasil K";
        }

        elseif($ubah == "Fahrenheit"){
            $hasil = (9/5)*$bilangan+32;
            echo "<br>";
            echo"$hasil F";
        }

        else{
            echo "<br>";
            echo"Silahkan pilih pilihan konversi";
        }

    
    }

    elseif($suhu == "Fahrenheit"){
        if($ubah == "Celcius"){
            $hasil = 5/9*($bilangan-32);
            echo "<br>";
            echo "$hasil C"; }

        elseif($ubah == "Rheamur"){
            $hasil = 4/9*($bilangan-32);
            echo "<br>";
            echo"$hasil R";
        }

        elseif($ubah == "Kelvin"){
            $hasil = 5/9*($bilangan-32)+273;
            echo "<br>";
            echo"$hasil K";
        }

        elseif($ubah == "Fahrenheit"){
            echo "<br>";
            echo"$bilangan F";
        }

        else{
            echo "<br>";
            echo"Silahkan pilih pilihan konversi";
        }

    
    }

    elseif($suhu == "Rheamur"){
        if($ubah == "Celcius"){
            $hasil = (5/4)*$bilangan;
            echo "<br>";
            echo "$hasil C"; }

        elseif($ubah == "Rheamur"){
            echo "<br>";
            echo"$bilangan R";
        }

        elseif($ubah == "Kelvin"){
            $hasil = (5/4)*$bilangan+273;
            echo "<br>";
            echo"$hasil K";
        }

        elseif($ubah == "Fahrenheit"){
            $hasil = (9/4)*$bilangan+32;
            echo "<br>";
            echo"$hasil F";
        }

        else{
            echo "<br>";
            echo"Silahkan pilih pilihan konversi";
        }

    
    }

    elseif($suhu == "Kelvin"){
        if($ubah == "Celcius"){
            $hasil = $bilangan-273;
            echo "<br>";
            echo "$hasil C"; }

        elseif($ubah == "Rheamur"){
            $hasil = 4/5*($bilangan-273);
            echo "<br>";
            echo"$hasil R";
        }

        elseif($ubah == "Kelvin"){
            echo "<br>";
            echo"$bilangan K";
        }

        elseif($ubah == "Fahrenheit"){
            $hasil = 9/5*($bilangan-273)+32;
            echo "<br>";
            echo"$hasil F";
        }

        else{
            echo "<br>";
            echo"Silahkan pilih pilihan konversi";
        }

    
    }
    else{
        echo "<br>";
        echo"Silahkan pilih pilihan konversi"; 
    }
}

?>






