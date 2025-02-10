<?php
    $cont=0;
    $sum=0;
    for ($i=0;$i<=4;$i++){
        $V[$i] = $cont+=10 ;
        $sum=$sum+$V[$i] ;
    }
    $media=$sum/count($V);

    echo "La media es: " . $media; 
?>