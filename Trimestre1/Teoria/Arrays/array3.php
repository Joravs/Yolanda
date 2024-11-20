<?php
    $Cuadrado = array(
        array(1,2,3,4),
        array(2,1,3,4),
        array(3,2,1,4),
        array(4,3,2,1)
    );
    $sumD=0;
    $sumd=0;
    for ($i = 0; $i < count($Cuadrado); $i++) {
        $sumD += $Cuadrado[$i][$i];
        $sumd+= $Cuadrado[count($Cuadrado)-1-$i][$i];
    }

    echo "La suma de los elementos de la diagonal principal es: ". $sumD;
    echo "<br>";
    echo "La suma de los elementos de la diagonal secundaria es: ". $sumd;
    echo "<br>";
?>