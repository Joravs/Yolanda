<?php
    $array1=array("Lagartija","Araña","Pedro","Gato","Raton");
    $array2=array("12","34","45","52","12");
    $array3=array("Sauce","Pino","Naranjo","Chopo","Perro","34");

    $fusiondearrays=array();
    
    foreach($array1 as $elem){
        array_push($fusiondearrays, $elem);
    }
    foreach($array2 as $elem){
        array_push($fusiondearrays, $elem);
    }
    foreach($array3 as $elem){
        array_push($fusiondearrays, $elem);
    }

    foreach($fusiondearrays as $elem){
        echo " $elem, ";
    }
?>