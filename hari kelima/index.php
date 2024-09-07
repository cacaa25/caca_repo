<?php

$totalbelanja=250000;
$diskon=0;

if($totalbelanja < 100000){
    $diskon=0;
}
elseif($totalbelanja <250000){
$diskon=0.05;
}
elseif($totalbelanja<500000){
    $diskon=0.10;
}
else{
    $diskon=0.15;
}

$totalbayar=$totalbelanja-($totalbelanja*$diskon);
echo $totalbayar;