<?php
    $valor=" Es tu nombre O\'reilly? ";

    $resultado = trim($valor); // Elimina espacios del principio y final del valor
    $resultado2= stripslashes($valor); // Elimina barras del valor
    echo $resultado . "<br>" . $resultado2;
?>