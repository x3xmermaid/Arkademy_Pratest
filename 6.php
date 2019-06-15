<?php

$desimal = 2;

function biner($desimal){
    $data = array();
    while($desimal>=1){
        if($desimal % 2 == 0){
            $data[] = 0;
        }else{
            $data[] = 1;
        }
        $desimal/=2;
        // echo floor($desimal);
    }
    
    $biner = implode($data);
    echo strrev($biner);
}

biner($desimal);

?>