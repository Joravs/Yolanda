<?php
    require_once 'datbd.php';
    $queryInsert="Insert into usuarios (usu,contra) values ('yolanda','yolanda')";
    if($ctbd->connect_error){die("Error Connected");}
    else{
        $ctbd->query($queryInsert);
        echo "Usuario Insertado";
    }
?>