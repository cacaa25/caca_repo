<?php

//algoritma
//1. jumlah jam kerja per minggu.
//2. upah = jam kerja*Rp. 2000
//3. jam lembur =jam kerja-48
//4. upah lembur =jam lembur*Rp. 3000
//5. upah normal =48Rp.2000
//6. total upah =upah normal + upah lembur

$upah_per_jam=2000;
$upah_lembur_per_jam=3000;
$jam_normal=48;
$jam_kerja=49;

if($jam_kerja>$jam_normal){
    $jam_lembur=$jam_kerja-$jam_normal;
    $upah_reguler=$jam_normal*$upah_per_jam;
    $upah_lembur=$jam_lembur*$upah_lembur_per_jam;
}else{
$upah_reguler=$jam_kerja*$upah_per_jam;
$upah_lembur=0;
}

$total_upah=$upah_reguler+$upah_lembur;

print "total upah minggu ini adalah $total_upah";