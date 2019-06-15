<?php

function segitiga ($n){
   $p=1; 
   $count=1;
   $new=1;
    while($p<=$n){
        for($i=1;$i<=9999;$i++){  
                
            $counter = 0; 
            for($j=1;$j<=$i;$j++){ 
                
                
                if($i % $j==0){ 
                    
                        $counter++;
                }
            }
        
            if($counter==2){
                
                print $i." ";
                $count++;
                if($count == $new+1){
                    $count=1;
                    $new++;
                    break;
                }
            }
        }
        $p++;
        echo nl2br("\r");
    }
}

segitiga(7);
?>