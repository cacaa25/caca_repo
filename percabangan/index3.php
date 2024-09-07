<?php

// berat badan->IMT //

$IMT=40;

IF($IMT<18.5){
    $Keterangan="kurus";
}
elseif($IMT <25){
    $Keterangan="normal";
}
elseif($IMT <30){
    $keterangan="overweight";
}
else{
    $keterangan="obesitas";
}
$kategori="$IMT:$keterangan";
echo $kategori;