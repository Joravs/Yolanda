<?php
    require_once "C:/xampp/php/vendor/autoload.php";
    $ctdb = new MongoDB\Client("mongodb://localhost:27017");
    $db= $ctdb->mi_base_de_datos;
    $clTest=$db->Test;
    /* $datos=array("_id"=>1,"Nombre"=>"Jordy");
    $clTest->insertOne($datos); */

    $result=$clTest->find(["Nombre"=>"Jordy"]);
    foreach($result as $r){
        echo $r["Nombre"]."<br>";
    }
?>