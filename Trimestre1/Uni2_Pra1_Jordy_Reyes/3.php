<?php
    define ("hrmax", 40);
    $hr=49;
    $pagohr=10;

    if($hr>hrmax){
        $hrextras=$hr-hrmax;
        if($hrextras<8){
            $pagoextra=$hrextras*(2*$pagohr);
        }else{
            $pagoextra=(8*(2*$pagohr)) + (($hrextras-8)*(3*$pagohr));
        }
        $pagototal=$pagohr*hrmax+$pagoextra;
    }else{
        $pagototal=$hr*$pagohr;
    }

    echo "Salario del trabajador es: $pagototal";
?>