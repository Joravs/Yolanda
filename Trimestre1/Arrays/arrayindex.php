<?php
    //$mascotas = array('Perro'=>"Yunito",'Gato'=>"Wilson",'Canario'=>"Piolin",'Tortuga'=>"Pepe");
    $anim = array('Perro'=>array('Mastin'=>"Yunito", 'Salchicha'=>"Fuet",'Chihuaha'=>"Sarnoso"),
    'Gato'=>array('Persa'=>"Otis",'Comun'=>"Garfield",'Siames'=>"Princesa"));
    foreach($anim as $tipo => $t_nom){
        echo "$tipo : <br><br>";
        foreach($t_nom as $raza => $nombre){
            echo "$raza : $nombre <br>";
        }
    }
?>