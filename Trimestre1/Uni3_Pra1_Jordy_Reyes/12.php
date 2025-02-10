<?php
    $datos = array('Nombre'=> "Pedro Torres", 'Direccion' => "C/Mayor, 37", 'Telefono'=> 123456789);

    foreach($datos as $dato => $info){
        echo "$dato: $info <br>";
    }
?>