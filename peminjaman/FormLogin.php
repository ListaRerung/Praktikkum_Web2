<?php session_start();
include 'Koneksi.php';
if (isset($_SESSION['nomor_member'])) {
    header("Location: index.php");
} ?>

<html>
    <body>
        <table>
            <form action="te.php" method="POST">
                <tr>
                    <td>id Member</td>
                    <td><input type="text" name="nomor_member" autofocus></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="password" name="passwd"></td>
                </tr>
                <tr>
                    <td><button type="submit" name="login">Login</button></td>
                </tr>
            </form>
        </table>
    </body>
</html>
