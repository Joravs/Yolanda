<?php
    require_once '../bd/ctdb.php';

    $updateL=$conn->prepare('UPDATE `controlGlucosa` SET `lenta`=? WHERE idUsuario=? and fecha=?');
    $updateD=$conn->prepare('UPDATE `controlGlucosa` SET `deporte`=? WHERE idUsuario=? and fecha=?');
?>