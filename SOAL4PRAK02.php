<!DOCTYPE html>
<html>
<body>
<h1>Input Nilai</h1>
<form action="" method="post">
Nilai <input type="text" name="bilangan">
    <input type="submit" value="Konversi">
    
</form>
</body>
</html>

<?php
$bilangan=$_POST["bilangan"];
if($bilangan == 0){
    echo "Nol\n";
}

elseif($bilangan >= 1 && $bilangan <= 9){
    echo "Satuan\n";
}

elseif($bilangan >=11   && $bilangan <= 19){
    echo "Belasan\n";
}

elseif($bilangan >= 100 && $bilangan <= 999){
    echo "Ratusan\n";
}

elseif($bilangan == 10 || $bilangan >=20 && $bilangan <=99){
    echo "Puluhan\n";
}

elseif($bilangan > 999) {
    echo "Anda Menginput Melebihi Limit Bilangan";
}
?>

