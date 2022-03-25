<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
        text{color:red;}</style>
    </head>
<body>
<h1>Input Biodata</h1>
<form action="" method="post">

Nama: <input type="text" name="nama"><text>*
<?php $nama=$_POST['nama'];
if($nama == NULL ){
    echo "nama tidak boleh kosong\n";
} ?></text>
<br>

Nim: <input type="text" name="nim"><text>*
<?php $nim=$_POST["nim"];
if($nim == NULL ){
echo "nim tidak boleh kosong\n";
}?></text>
<br>

Jenis Kelamin:<text>*
    <?php $jeniskelamin =$_POST['jeniskelamin'];
if($jeniskelamin == NULL ){
echo "jenis kelamin tidak boleh kosong\n";
}?></text>
<br>
<input type="radio" name="jeniskelamin" value="Laki-Laki">Laki-Laki
      <br>
<input type="radio" name="jeniskelamin" value="Perempuan">Perempuan
   <br>

<input type="submit" name="send" value="submit"><br><br>
</form>
</body>
</html>

<?php
        if ($nama == TRUE) {
            echo "$nama";
            echo "<br>";
        }
        if($nim == TRUE){
            echo "$nim";
            echo"<br>";
        }
        if($jeniskelamin== TRUE){
                echo "$jeniskelamin";
                echo "<br>";
        }
    ?>
