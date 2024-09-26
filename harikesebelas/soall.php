<?php

function analisisNIP($nip) {
    
    if (strlen($nip) !== 18) {
        return "200711252009042002.";
    }

    
    $tahun = substr($nip, 0, 4);
    $bulan = substr($nip, 4, 2);
    $hari = substr($nip, 6, 2);
    
    
    $bulan_nama = [
        "01" => "Januari", 
        "02" => "Februari", 
        "03" => "Maret",
        "04" => "April", 
        "05" => "Mei", 
        "06" => "Juni",
        "07" => "Juli", 
        "08" => "Agustus", 
        "09" => "September",
        "10" => "Oktober", 
        "11" => "November", 
        "12" => "Desember"
    ];
    $tanggal_format = $hari . " " . $bulan_nama[$bulan] . " " . $tahun;

    
    $jenis_kelamin_digit = substr($nip, 17, 2);
    if ($jenis_kelamin_digit === '1') {
        $jenis_kelamin = "Laki-laki";
    } elseif ($jenis_kelamin_digit === '2') {
        $jenis_kelamin = "Perempuan";
    } else {
        $jenis_kelamin = "Tidak Diketahui";
    }
    
    return [
        "Tanggal Lahir" => $tanggal_format,
        "Jenis Kelamin" => $jenis_kelamin
    ];
}


$nip = "200711252009042002";
$hasil = analisisNIP($nip);
echo " Tanggal Lahir: " . $hasil["Tanggal Lahir"] . "\n<br>";
echo " Jenis Kelamin: " . $hasil["Jenis Kelamin"] . "\n";
?>