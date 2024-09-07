<?php
for($i=2;$i<=100;$i++){
    $cek=0;
    for($k=2;$k<=$i;$k++){
        if($i%$k==0){
        $cek++;
        }
    }
    if($cek==1){
        echo"$i <br>";
    }
}