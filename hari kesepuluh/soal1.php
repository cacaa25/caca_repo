<?php

$datapersegipanjang=array( array("nama"=>"persegi1","panjang"=>"56","lebar"=>"23"),
array("nama"=>"persegi2","panjang"=>"33","lebar"=>"21"),
array("nama"=>"persegi3","panjang"=>"65","lebar"=>"42"),
array("nama"=>"persegi4","panjang"=>"73","lebar"=>"29"),
);

$jsonData=json_encode($datapersegipanjang,JSON_PRETTY_PRINT);
echo"<pre>".$jsonData."</pre>";

echo "<br><hr>";
//data persegi panjang
$persegipanjang =[
    ["persegi1",56,23],
    ["persegi2",33,21],
    ["persegi3",65,42],
    ["persegi4",56,23],
];

for ($i =0; $i < count($persegipanjang); $i++) {
    $luas =$persegipanjang[$i][1] * $persegipanjang[$i][2];
    $persegipanjang[$i][] = $luas;
}

echo"<table>";
echo "<tr><th> persegi panjang </th><th> panjang </th><th> lebar </th><th> luas </th><tr>";
foreach ($persegipanjang as $persegi) {
    echo "<tr>";
    echo "<td>" . $persegi[0] . "</td>";
    echo "<td>" . $persegi[1] . "</td>";
    echo "<td>" . $persegi[2] . "</td>";
    echo "<td>" . $persegi[3] . "</td>";
    echo "</tr>";;
}
echo "</table>";