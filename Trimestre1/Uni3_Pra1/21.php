<?php
    $numeros=array('Aqui'=>3,
    'Yolanda'=> 2,
    'El'=>8,
    'Ejercicio'=>123,
    'Tienes'=>5,
    'Buenas'=>1);
    asort($numeros);
    foreach($numeros as $numero){
        echo "$numero ";
    }
?>