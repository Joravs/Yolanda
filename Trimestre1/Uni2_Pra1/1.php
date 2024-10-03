<?php
    $n1=3;
    $n2=4;

    if  ($n1 == $n2){
        $res = $n1 * $n2;
    }
    elseif ($n1>$n2){
        $res=$n1-$n2;
    }
    else{
        $res=$n1+$n2;
    }

    echo $res;
?>