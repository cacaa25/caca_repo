<?php

$nama=array("andi","budi","candra","dedi","emon");
foreach ($nama as $n){
    echo $n. '<br>';
}

echo "<br><hr>";
$nama[4]="hafiz";
foreach ($nama as $n){
    echo $n. "<br>";
}