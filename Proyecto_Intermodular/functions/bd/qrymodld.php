<?php
    require_once '../bd/ctdb.php';

    $updateL=$conn->prepare('UPDATE `controlglucosa` SET `lenta`=? WHERE idUsuario=? and fecha=?');
    $updateD=$conn->prepare('UPDATE `controlglucosa` SET `deporte`=? WHERE idUsuario=? and fecha=?');
?>