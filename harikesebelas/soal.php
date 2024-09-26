<?php

// function tanpa argument

function cetak(){
echo "caca bila";
echo "<br>";
}
cetak();
cetak();


echo "<br><hr>";
// function dengan 3 argument
function ageCount($nama,$tahun,$tempat){
    $umur=date("Y")-$tahun;
    echo "Hai nama saya $nama, umur saya $umur tahun, tempat tinggal saya $tempat <br>";
    }
ageCount("caca",2007,"bukit rata");
ageCount("mawaddah",2007,"pantai tinjau");


echo "<br><hr>";
// function return value
function jumlahkan($bil1,$bil2){
    return $bil1%$bil2;
}
echo jumlahkan(4,5)."<br>";
echo jumlahkan(8,3)."<br>";
$jum=jumlahkan(2,10)."<br>"; 
echo $jum;

