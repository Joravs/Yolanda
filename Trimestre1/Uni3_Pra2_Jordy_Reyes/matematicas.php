<?php
    function ecuacion2grado($a,$b,$c){
        $soluciones=array();
        $elevarB=pow($b,2);
        $raiz=sqrt($elevarB-(4*$a*$c));
        
        $x=$elevarB-(4*$a*$c);
        $xneg=$solneg=$b-$raiz;
        $xpos=$b+$raiz;

        if ($x<0){
            return false;
        }elseif ($x==0){
            return array_push($soluciones,(-$b/(2*$a)));
        }else{
            array_push($soluciones,(-($b+$raiz)/(2*$a)));
            array_push($soluciones,(-($b-$raiz)/(2*$a)));
            return $soluciones;
        }
    }
?>