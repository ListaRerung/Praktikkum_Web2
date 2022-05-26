<?php session_start();
if (!isset($_SESSION['nomor_member'])) {
    header("Location: FormLogin.php");
}?>

<htmL>
    <body>
        <ul>
            <li>
                <a href="Member.php">Daftar Informasi Member</a>
            </li>
                <a href="Buku.php">Daftar Informasi Buku</a>
            </li>
            <li>
                <a href="Peminjaman.php">Daftar Informasi Peminjaman</a>
            </li>
        </ul>
        <a href="Logout.php">Logout</a>
    </body>
</html>