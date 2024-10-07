<?php
    $array1=array("Lagartija","Araña","Pedro","Gato","Raton");
    $array2=array("12","34","45","52","12");
    $array3=array("Sauce","Pino","Naranjo","Chopo","Perro","34");
    
    $fusiondearrays=array();
    array_push($fusiondearrays, $array1);
    array_push($fusiondearrays, $array2);
    array_push($fusiondearrays, $array3);

    foreach($fusiondearrays as $elem){
        echo "$elem, ";
    }

    
?>