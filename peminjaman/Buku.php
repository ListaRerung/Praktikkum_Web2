<?php
require('./Model.php');
if (isset($_GET['id_buku'])) {
    hapusbuku($_GET['id_buku']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Buku</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Judul Buku</th>
            <th>Penulis Buku</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        <?php tampildata("buku") ?>
    </table>
    <br>
    <a href="FormBuku.php"><button>Tambah Data</button></a>
</body>
</html>
