<html>
    <head>
        <style>
            table, tr, td, th{
                border: solid 1px black;
                text-align: center;
                width: 50%;
            }
        </style>
    </head>       
    <body>
        <table>
            <tr>
                <td>Nama</td>
                <td>Nim</td>
                <td>Nilai UTS</td>
                <td>Nilai UAS</td>
                <td>Nilai Akhir</td>
                <td>Huruf</td>
            </tr>

<?php
$data = [
    ["nama"=>"Andi", "nim"=>"2101001","nilaiuts"=>87, "nilaiuas"=>65],
    ["nama"=>"Budi", "nim"=>"2101002","nilaiuts"=>76, "nilaiuas"=>79],
    ["nama"=>"Tono", "nim"=>"2101003","nilaiuts"=>50, "nilaiuas"=>41],
    ["nama"=>"Jessica", "nim"=>"2101004","nilaiuts"=>60, "nilaiuas"=>75],
];

for ($i=0; $i< count($data); $i++){
    $data[$i]["nilaiakhir"]= $data[$i]["nilaiuts"]*40/100 + $data[$i]["nilaiuas"]*60/100;

    if($data[$i]["nilaiakhir"] < 50){
        $data[$i]["huruf"] = "E";
    }
    elseif(($data[$i]["nilaiakhir"] >= 50) && ($data[$i]["nilaiakhir"] <= 59)){
        $data[$i]["huruf"] = "D";
    }
    elseif(($data[$i]["nilaiakhir"]) >= 60 && ($data[$i]["nilaiakhir"] <= 69)){
        $data[$i]["huruf"] = "C";
    }
    elseif(($data[$i]["nilaiakhir"]) >= 70 && ($data[$i]["nilaiakhir"] <= 79)){
        $data[$i]["huruf"] = "B";
    }
    elseif($data[$i]["nilaiakhir"] >= 80  ){
        $data[$i]["huruf"] = "A";
    }

}

for($j = 0; $j <count($data); $j++){
    echo "<tr>";
    echo "<td>".$data[$j]["nama"]."</td>";
    echo "<td>".$data[$j]["nim"]."</td>";
    echo "<td>".$data[$j]["nilaiuts"]."</td>";
    echo "<td>".$data[$j]["nilaiuas"]."</td>";
    echo "<td>".$data[$j]["nilaiakhir"]."</td>";
    echo "<td>".$data[$j]["huruf"]."</td>";
    echo "</tr>";
}
?>

</table>
</body>
</html>

