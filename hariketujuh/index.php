<?php

//perulangan --> looping
//inisialisasi variabel perulangan;kondisi perulangan;penjumlahan/pengurangan
echo"<h3>perulangan for</h3>";
for ($i=0;$i<=1;$i++){
    echo"ini perulangan ke-$i <br>";
}
echo "<hr>";
echo "<h3>perulangan while</h3>";
$a=0;
while($a<=1){
echo "ini perulangan ke-$a <br>";
    $a++;
}
echo "<hr>";
echo "<h3>perulangan Do-While</h3>";
$x=0;
do {
    echo "ini perluangan le-$x <br>";
    $x++;
}while ($x<=1);