<?php
    /*

    */
    for($i=1;$i<=50;$i++){
        $primo=true;
        for($j=2;$j<=$i/2;$j++){
            if($i%$j==0){
                $primo=false;
            }   
        }
        if ($primo==true){
            echo $i ." ";
        }
    }
?>