<!DOCTYPE html>
<html>
<body>
<h1>Hasil yang diinginkan</h1>
<form action="" method="post">

Nama: 1 <input type="text" name="nama1"><br>
Nama: 2 <input type="text" name="nama2"><br>
Nama: 3 <input type="text" name="nama3"><br>
<input type="submit" name="send" value="Konversi">
    
</form>
</body>
</html>

<?php
if(isset($_POST["send"])){
    $nama1= $_POST["nama1"];
    $nama2= $_POST["nama2"];
    $nama3= $_POST["nama3"];

    if($nama1 < $nama2 && $nama3){
        echo"$nama1";
        echo"<br>";

        if($nama2 < $nama3 ){
            echo"$nama2";
            echo"<br>";
            echo"$nama3";
            echo"<br>";
        }

        elseif($nama2 > $nama3){
            echo"$nama3";
            echo"<br>";
            echo"$nama2";
            echo"<br>";
        }
    }

    elseif($nama2 < $nama1 && $nama3){
        echo"$nama2";
        echo"<br>";

        if($nama1 < $nama3){
            echo"$nama1";
            echo"<br>";
            echo"$nama3";
            echo"<br>";
        }

        elseif($nama1 > $nama3){
            echo"$nama3";
            echo"<br>";
            echo"$nama1";
        }
    }

    elseif($nama3 > $nama1 && $nama2){
        echo"$nama3";
        echo"<br>";

        if($nama1 < $nama2 ){
            echo"$nama1";
            echo"<br>";
            echo"$nama2";
            echo"<br>";
        }

        elseif($nama1 > $nama2){
            echo"$nama2";
            echo"<br>";
            echo"$nama1";
        }
    }

 
   
}

    ?>


