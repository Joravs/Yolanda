<?php
    $array1=array("Lagartija","Araña","Perro","Gato","Raton");
    $array2=array("12","34","45","52","12");
    $array3=array("Sauce","Pino","Naranjo","Chopo","Perro","34");

    $arrayfusionado=array_merge($array1,$array2,$array3);
    
    foreach($arrayfusionado as $elem){
        echo "$elem, ";
    }
?>