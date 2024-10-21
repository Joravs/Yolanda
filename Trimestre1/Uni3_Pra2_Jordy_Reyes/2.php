<?php
    include("matematicas.php");
    $a=-6;
    $b=4;
    $c=2;
    $soluciones=ecuacion2grado($a,$b,$c);
    if ($soluciones==false){
        echo "No hay soluciones reales";
    }else{
        echo implode(', ',$soluciones);
    }
?>