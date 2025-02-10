<?php
    $peliculas_vistas=array(
        'enero' =>9,
        'febrero'=>12,
        'marzo'=>0,
        'abril'=>17);

    foreach($peliculas_vistas as $vistas){
        if ($vistas != 0){
            echo $vistas . " ";
        }
    }
?>