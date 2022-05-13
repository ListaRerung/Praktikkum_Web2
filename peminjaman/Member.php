<?php
require('./Model.php');
if (isset($_GET['id_member'])) {
    hapusmember($_GET['id_member']);
}
?>

<html>
<body>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>nomor_member</th>
            <th>alamat</th>
            <th>Tgl daftar</th>
            <th>tgl bayar</th>
            <th>Aksi</th>
        </tr>
        <?= tampildata("member") ?>
    </table>
      <a href="FormMember.php"><button>Tambah Data</button></a>
</body>
</html>
