<?php
    require_once "C:/xampp/php/vendor/autoload.php";
    $ctdb = new MongoDB\Client("mongodb://localhost:27017");
    $db= $ctdb->Clase1;
    $clTest=$db->Test;
    $datos=array("ID"=>1,"Nombre"=>"Jordy");
    $clTest->insertOne($datos);
    
    $mys="localhost";
    $user="root";
    $pw="";
    $db="cartas";
    $cnn=new mysqli($mys,$user,$pw,$db);
    
?>