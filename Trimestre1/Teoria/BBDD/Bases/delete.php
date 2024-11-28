<?php
    require_once 'datbd.php';
    $ctbd = new mysqli($hn,$u,$pw,$db);
    $queryInsert="delete from usuarios where usu='yolanda'";
    if($ctbd->connect_error){die("Error Connected");}
    else{
        $ctbd->query($queryInsert);
        echo "Usuario Eliminado";
    }
    $ctdb->close();
?>