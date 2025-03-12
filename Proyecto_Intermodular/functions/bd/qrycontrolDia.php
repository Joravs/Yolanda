<?php
    require_once '../bd/ctdb.php';

    $insrtControl=$conn->prepare(
        'INSERT INTO `controlGlucosa`(`idUsuario`, `fecha`) VALUES (?,?);'
    );
    $slectHoy=$conn->prepare(
        'SELECT `fecha` FROM `controlGlucosa` WHERE `idUsuario`=? AND `fecha`=?;'
    );
?>