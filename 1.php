<?php
$uang = "50000";

function Mie ($uang){
    $jumlahMie = $uang/2500;
    $bonus = $jumlahMie/4;
    
    $jumlahMie += floor($bonus);
    echo "Mie yang didapatkan : ".$jumlahMie;
}

Mie($uang);
?>