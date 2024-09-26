<?php

// function tanpa argument

function cetak(){
    echo "";
    echo "<br>";
}
cetak();
cetak();

//function dengan 3 argument

function ageCount($nama,$tahun){
    $umur=date("Y")-$Tahun;
    echo "Hai $nama, umur kamu $umur tahun <br>";
}
ageCount("",);
ageCount("",);

//function return value

function jumlahkan($bil,$bil2){
return $bil1+$bil2;
}
echo jumlahkan(5,2)."<br>";
echo jumlahkan(7,9)."<br>";
$jum=jumlahkan(6,4);
echo $jum;