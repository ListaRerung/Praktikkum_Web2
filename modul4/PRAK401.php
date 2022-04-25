<!DOCTYPE html>
<html>
    <head>
        <style>
            table, tr, td {
                border: solid 1px black;
                text-align: center;
            }
            </style>
</head>

<body>
<form action="" method="post">
Panjang: 
<input type="number" name="panjang"><br><br>
Lebar: 
<input type="number" name="lebar"><br><br>
Nilai: 
<input type="text" name="nilai"><br><br>
<input type="submit" name="send" value="Cetak"><br><br>
    <?php
    if(isset($_POST["send"])){
    $panjang= $_POST["panjang"];
    $lebar= $_POST["lebar"];
    $nilai= $_POST["nilai"];
    $input = explode(" ",$nilai);
    $length = count($input);

    if($panjang * $lebar == $length){
        $i = 0;
        for($j=0; $j < $panjang; $j++){
            for($x=0; $x < $lebar; $x++){
                $array[$j][$x]= $input[$i];
                $i++;
            }     
        }

        echo "<table>";
        for ($j=0; $j < $panjang; $j++){
            echo"<tr>";
            for ($x=0; $x < $lebar; $x++){
                echo"<td>".$array[$j][$x]."</td>";
            }
            echo "</tr>";
        }
    } else{
        echo "Panjang nilai tidak sesuai dengan ukuran matriks";
    }
       
    }
    ?>  
</body>
</html>     
