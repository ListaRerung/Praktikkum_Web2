<!DOCTYPE html>
<html>
<body>
<form action="" method="post">
Jumlah Peserta: 
<input type="text" name="jumlah"><br>
<input type="submit" name="send" value="Cetak"><br>
    <?php
    if(isset($_POST["send"])){
    $jumlah= $_POST["jumlah"];
    $x = 1;
       while($x <= $jumlah ){
           if($x % 2 == 0){
           echo "<h1 style='color:green'>
           Peserta Ke-$x</h1>";}
           else{
            echo "<h1 style='color:red'>
            Peserta Ke-$x</h1>";
           }
           $x++;
  
       }

    }
    ?>  
</body>
</html>