<?php
//buatlah aplikasi untuk menentukan diskon dengan ketentuan jika total belanja lebih dari 100k maka akan mendapatkan diskon sebesar 5% jika total belanja lebih dari 200k maka akan mendapatkan diskon sebesar 10%.tentukan total bayar setelah dikurangi diskon.

//algoritma
//1.inisialisasi variabel belanja
//2.inisialisasi variabel diskon 
//3.jika total belanja lebih dari 200k maka diskon 10%
//4.jika total belanja lebih dari 100k maka diskon 5%
//5,jika tidak maka diskon 0%

$totalBelanja=150000;
$diskon=0;

if($totalBelanja>200000){
    $diskon=0.1;
}elseif($totalBelanja>100000){
    $diskon=0.05;
}else{
    $diskon=0;
}
$potonganHarga=$totalBelanja*$diskon;
$totalBayar=$totalBelanja-$potonganHarga;

echo $totalBayar;
