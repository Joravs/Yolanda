<?php
    $array1=array("Lagartija","Araña","Pedro","Gato","Raton");
    $array2=array("12","34","45","52","12");
    $array3=array("Sauce","Pino","Naranjo","Chopo","Perro","34");

    foreach($array1 as $elem){
        array_push($fusiondearrays);
    }

    foreach($array2 as $elem){
        array_push($fusiondearrays);
    }

    foreach($array3 as $elem){
        array_push($fusiondearrays);
    }
    foreach($fusiondearrays as $elem){
        echo " $elem, ";
    }
?>