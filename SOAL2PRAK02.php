<!DOCTYPE html>
<html>
<body>
<h1>Input Biodata</h1>
<form action="" method="post">
Nama: <input type="text" name="nama"><font color="red">*</font>
<font color="red">
<?php
$nama=$_POST['nama'];
if($nama == NULL ){
    echo "nama tidak boleh kosong\n";
}
?></font>
<br>
Nim: <input type="text" name="nim"><font color="red">*</font>
<font color="red"><?php
$nim=$_POST["nim"];
if($nim == NULL ){
    echo "nim tidak boleh kosong\n";
}
?></font>
<br>
Jenis Kelamin:<font color="red">*</font>
<?php
        $jeniskelamin =$_POST['jeniskelamin'];
        if($jeniskelamin == NULL ){
        echo "jenis kelamin tidak boleh kosong\n";
        }
    ?>
<br>
<input type="radio" name="jeniskelamin" value="Laki-Laki">Laki-Laki
      <br>
<input type="radio" name="jeniskelamin" value="Perempuan">Perempuan
   <br>
<input type="submit" name="send" value="submit"><br><br>

    <?php
    echo "$nama";
    echo "<br>";
    echo "$nim";
    echo "<br>";
    echo "$jeniskelamin";

?>
</form>
</body>
</html>






