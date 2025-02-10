<?php
    $nums=array(5=>1,12=>2,13=>56,'x'=>42);

    //Mostrar contenido
    foreach($nums as $num){
        echo "$num ";
    }

    //Contar contenido
    echo "<br> " . count($nums). "<br>";

    //Eliminar el indice 5
    unset($nums[5]);

    //Mostrar contenido nuevamente
    foreach($nums as $num){
        echo "$num ";
    }

    //Eliminar array
    unset($nums);
?>