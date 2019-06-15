<?php

$fString = "bananananana";;
$sString = "nana";

function palindrome ($fString, $sString){
    $iter = strlen($fString)-strlen($sString); 
    $num=0;
    if($iter<0){
        echo "kata pencarian tidak boleh lebih panjang dari string awal";
    }
    for($i=0;$i<=$iter;$i++){
        if($sString == substr($fString, $i, strlen($sString))){
            // echo substr($fString, $i, strlen($sString)).nl2br("\r");
            $num++;
        }
    }
    for($i=$iter;$i>=0;$i--){
        // echo substr($fString, $i, strlen($sString)).nl2br("\r");
        if($sString == substr($fString, $i, strlen($sString))){
            $num++;
        }
    }
    echo $num;
}

palindrome($fString, $sString);
?>