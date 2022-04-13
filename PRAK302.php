<!DOCTYPE html>
<html>
<body>
<form action="" method="post">
Tinggi:
<input type="text" name="tinggi"><br>
Alamat Gambar:
<input type="url" name="foto"><br>
<br>
<input type="submit" name="send" value="Cetak"><br>
    <?php
    if(isset($_POST["send"])){
    $tinggi= $_POST["tinggi"];
    $foto= $_POST["foto"];
    $i = 0;
    while($i < $tinggi){
        $j = 0;
        while ($j < $i){
        echo "&nbsp &nbsp &nbsp";
        $j++;
    }
        $j = 0;
        while( $j < $tinggi-$i){
        echo "<img width='20' height='20' img src='$foto'/>";
        $j++;
    }
    $i++;
    echo"<br>";
    }       
    
}
 ?>  
</body>
</html>