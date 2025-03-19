<?php
    require_once 'ctdb.php';

    $deleteReg=$conn->prepare('DELETE FROM comidas WHERE tipoComida = ? AND fecha = ? AND idUsuario = ?');
    $deleteRegHipo=$conn->prepare('DELETE FROM hipo WHERE tipoComida = ? AND fecha = ? AND idUsuario = ?');
    $deleteRegHiper=$conn->prepare('DELETE FROM hiper WHERE tipoComida = ? AND fecha = ? AND idUsuario = ?');
?>