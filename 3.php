<?php
$x=2;
$y=3;

function Pohon ($x, $y){
    for($i=1;$i<=$y;$i++){
        $x*=2;
        $x+=1;
    }
    echo "tinggi pohon selama $y tahun adalah $x M";
}

Pohon($x, $y);
?>