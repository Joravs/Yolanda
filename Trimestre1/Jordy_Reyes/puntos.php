<?php
    require_once 'db.php';

    $qryPuntos="SELECT login, puntos from jugador";
    $result=$ctdb->query($qryPuntos);
?>