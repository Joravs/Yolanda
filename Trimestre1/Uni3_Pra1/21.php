<?php
    $numeros=array('Buenas'=>3,
    'Yolanda'=> 2,
    'Aqui'=>8,
    'Tienes'=>123,
    'El'=>5,
    'Ejercicio'=>1);

    foreach(array_sort($numeros) as $numero){
        echo "$numero ";
    }
?>