<?php
    $n1=4;
    $n2=2;
    $n3=1;

    if ($n1>$n2 && $n1>$n3){
        $m = $n1;
    }
    elseif($n2>$n3){
        $m = $n2;
    }else{
        $m = $n3;
    }

    echo "El numero mayor es: $m";
?>