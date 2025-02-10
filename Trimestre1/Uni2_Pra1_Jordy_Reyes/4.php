<?php
    $rand1=rand(0, 100);
    $rand2=rand(0,100);

    if ($rand1>$rand2){
        $mayor=$rand1;
        echo "El mayor es el primer numero ". $rand1 . " > " . $rand2;
    }else{
        $mayor=$rand2;
        echo "El mayor es el segundo numero ". $rand2 . " > " . $rand1;
    }
    if ($mayor%2==0){
        echo "  El numero es par";
    }else{
        echo " El numero es impar";
    }
?>