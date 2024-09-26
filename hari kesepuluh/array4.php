<?php

$angka=array("7","5","9","12","4","54","76","98");
foreach ($angka as $n){
    if ($n % 2 !== 0){
    echo $n . " ";
}
}

echo "<br><hr>";
$angka=array("7","5","9","12","4","54","76","98");
$total=0;
foreach ($angka as $n){
    $total += $n;
}
echo "jumlah seluruh angka dalam array adalah: ". $total;

echo "<br><hr>";
$angka=array(7,5,9,12,4,54,76,98);
asort($angka);
echo"array yang diurutkan: ";
foreach($angka as $value) {
    echo"$value";
}