<?php
    require_once "ctdbMysql.php";
    require_once "ctdbMongo.php";

    $selectUsers="SELECT nombre,apellido1,apellido2,departamento FROM empleados";
    $result=$conn->query($selectUsers);
    if($result->rows>0){
        foreach($result as $r){
            $dato=array("nombre"=>$r["nombre"],"apellido1"=>$r["apellido1"],"apellido2"=>$r["apellido2"],"departamento"=>$r["departamento"]);
            $clTest->insertOne($dato);
        }
        echo "Datos introducidos";
    }
?>