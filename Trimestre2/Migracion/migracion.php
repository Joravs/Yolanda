<?php
    require_once "../ctdbMysql.php";
    require_once "../ctdbMongo.php";

    $selectUsers="SELECT nombre,apellido1,apellido2,departamento FROM empleados";
    $result=$conn->query($selectUsers);
    if($result->num_rows>0){
        foreach($result as $r){
            $clTest->insertOne($r);
        }
        echo "Datos introducidos";
    }

    $conn->close;
    $ctdb->close;
?>