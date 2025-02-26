<?php
    require_once '../bd/ctdb.php';

    $insrtControl=$conn->prepare(
        'INSERT INTO `controlGlucosa`(`idUsuario`, `fecha`) VALUES (?,CURDATE());'
    );
    $slectHoy=$conn->prepare(
        'SELECT `fecha` FROM `controlGlucosa` WHERE `idUsuario`=? AND `fecha`=CURDATE();'
    );
?>