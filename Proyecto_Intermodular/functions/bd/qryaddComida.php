<?php
    require_once '../bd/ctdb.php';

    $insrtComidas=$conn->prepare(
        'INSERT INTO `comidas`(`idUsuario`, `fecha`, `glucosa1`, `glucosa2`, `racion`, `insulina`, `tipoComida`) 
        VALUES (?,CURDATE(),?,?,?,?,?)'
    );

    $insrtHipo=$conn->prepare(
        'INSERT INTO `hipo`(`idUsuario`, `fecha`, `tipoComida`, `hora`, `glucosa`) 
        VALUES (?,CURDATE(),?,?,?)'
    );

    $insrtHiper=$conn->prepare(
        'INSERT INTO `hiper`(`idUsuario`, `fecha`, `tipoComida`, `hora`, `glucosa`, `correccion`) 
        VALUES (?,CURDATE(),?,?,?,?)'
    );
?>