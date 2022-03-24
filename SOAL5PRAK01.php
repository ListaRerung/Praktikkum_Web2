<!DOCTYPE html>
<html>
<head>
    <style>
         table, td, tr {
            border: 1px solid black;
         }

         th {
            border: 1px solid black;
            background-color: red;
         }
    </style>
</head>
<body>
    <?php
    $samsung = array("S22"=>"Samsung Galaxy S22","S22p"=>"Samsung Galaxy S22+",
    "A03"=>"Samsung Galaxy A03","Xcover"=>"Samsung Galaxy Xcover 5");?>
    <table>
        <th>Daftar Smartphone Samsung </th>
           <tr><td><?php echo "$samsung[S22]";?></td></tr>
           <tr><td><?php echo "$samsung[S22p]";?></td></tr>
           <tr><td><?php echo "$samsung[A03]";?></td></tr>
           <tr><td><?php echo "$samsung[Xcover]";?></td></tr>
    </table>
</body>
</html>