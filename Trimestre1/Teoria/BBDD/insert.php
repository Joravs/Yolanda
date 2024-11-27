<?php
    require_once 'datbd.php';
    $ctbd = new mysqli($hn,$u,$pw,$db);
    $queryInsert="Insert into usuarios (usu,contra) values ('yolanda','yolanda')";
    if($ctbd->connect_error){die("Error Connected");}
    else{
        $ctbd->query($queryInsert);
        echo "Usuario Insertado";
    }
?>