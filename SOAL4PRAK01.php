<!DOCTYPE html>
<html>
<head>
    <style>
         table, th, td, tr {
            border: 1px solid black;
         }
    </style>
</head>
<body>
    <?php
    $samsung = array("Samsung Galaxy S22","Samsung Galaxy S22+",
    "Samsung Galaxy A03","Samsung Galaxy Xcover 5");?>
    <table>
        <th>Daftar Smartphone Samsung </th>
           <tr><td><?php echo "$samsung[0]";?></td></tr>
           <tr><td><?php echo "$samsung[1]";?></td></tr>
           <tr><td><?php echo "$samsung[2]";?></td></tr>
           <tr><td><?php echo "$samsung[3]";?></td></tr>
    </table>
</body>
</html>