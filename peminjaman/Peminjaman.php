<?php
require('./Model.php');
if (isset($_GET['id_peminjaman'])) {
    hapuspeminjaman($_GET['id_peminjaman']);
}?>

<html>
<body>
    <table border="1">
        <tr>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Aksi</th>
        </tr>
        <?= tampildata("peminjaman") ?>
    </table>
    <a href="FormPeminjaman.php"><button>Tambah Data</button></a>
</body>
</html>
