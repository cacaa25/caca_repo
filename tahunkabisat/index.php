<?php

//algoritma
//1. jika tahun tersebut habis dibagi dengan angka 400 --> tahun kabisat
//2. jika tahun itu tidak habis dibagi dengan angka 400,tapi habis dibagi angka 100 --> bukan tahun kabisat
//3. jika tahun itu tidak habis dibagi 400 ataupun 100, namun habis dibagi dengan angka 4 --> tahun kabisat
//4. jika tahun itu tidak habis dibagi 400,100,maupun 4 --> bukan tahun kabisat 

$tahun= 2024;

function tahunkabisat($tahun) {
    if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
        return true;
    } else {
        return false;
    }
} 

if (tahunkabisat($tahun)) {
    echo "$tahun adalah tahun kabisat.";
} else {
    echo "$tahun bukan tahun kabisat.";
}