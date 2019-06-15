<?php

$data = [6,9,7,5,4,21,94,54,36,75];

function ngeSort($data){
    echo "data Terkecil ".min($data).nl2br("\r");
    echo "data Terbesar ".max($data).nl2br("\r");
    asort($data);
    echo "data Terkecil ke Besar ". implode(', ', $data).nl2br("\r");
    rsort($data);
    echo "data Terbesar ke Kecil ". implode(', ', $data).nl2br("\r");
}

ngeSort($data);
?>