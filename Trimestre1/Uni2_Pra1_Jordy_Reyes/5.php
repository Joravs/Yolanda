<?php
    $a= 6;
    $b= 4;
    $c= 2;
    $elevarB=pow($b,2);
    $raiz=sqrt($elevarB-(4*$a*$c));

    $sol=$elevarB-(4*$a*$c);
    $solneg=$b-$raiz;
    $solpos=$b+$raiz;

    if ($sol<0){
        echo "No hay soluciones reales";
    }elseif($sol==0){
        $sol1=-$b/(2*$a);
        echo "Hay una solucion";
    }else{
        $sol1=-($b+$raiz)/(2*$a);
        $sol2=-($b-$raiz)/(2*$a);
        echo "Las soluciones son: ".$sol1 . " y " . $sol2;
    }
?>