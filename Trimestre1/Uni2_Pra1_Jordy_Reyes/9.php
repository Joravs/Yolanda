<?php
    $num1=rand(1,10);
    $primo=true;
    for ($i=2;$i<=$num1/2;$i++){
        if($num1%$i==0){
            $primo=false;
        }
    }
    if($primo==true){
        echo "El numero ".$num1." es primo";
    }
?>