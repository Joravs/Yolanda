<?php
    $colores=['red','yellow','green','blue'];
    $coloresRand=[$colores[array_rand($colores)],$colores[array_rand($colores)],$colores[array_rand($colores)],$colores[array_rand($colores)]];
    $colorBlack='black';

    function pintar_circulos($col1,$col2,$col3,$col4){
        echo '<input type="button" name="'.$col1.'" style="background-color:\''.$col1.'\'; border-radius:50%"></input>';
        echo '<input type="button" name="'.$col2.'" style="background-color:\''.$col2.'\'; border-radius:50%"></input>';
        echo '<input type="button" name="'.$col3.'" style="background-color:\''.$col3.'\'; border-radius:50%"></input>';
        echo '<input type="button" name="'.$col4.'" style="background-color:\''.$col4.'\'; border-radius:50%"></input>';
    }
?>