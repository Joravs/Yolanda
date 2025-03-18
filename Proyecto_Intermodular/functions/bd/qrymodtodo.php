<?php 
    require_once '../bd/ctdb.php';

    $updateTodo=$conn->prepare('UPDATE `comidas` SET `glucosa1`=?,`glucosa2`=?,`racion`=?,`insulina`=? WHERE `idUsuario`=? and `fecha`=? and `tipoComida`=?');
?>