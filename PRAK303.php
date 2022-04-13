<!DOCTYPE html>
<html>
<body>
<form action="" method="post">
Batas Bawah: 
<input type="text" name="batasbawah"><br>
Batas Atas: 
<input type="text" name="batasatas"><br>
<input type="submit" name="send" value="Cetak"><br>
    <?php
    if(isset($_POST["send"])){
    $bawah= $_POST["batasbawah"];
    $atas= $_POST["batasatas"];
        do {
            if(($bawah + 7) % 5==0){
                echo "<img src='star-images.png' width='15' height='15'/>";
            }
            else{
                echo "$bawah";
            }
            $bawah++;
        }
       while($bawah <= $atas);

    
}
    ?>  
</body>
</html>