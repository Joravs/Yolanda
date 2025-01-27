<?php
    require_once "../ctdbMongo.php";
    require_once "../ctdbMysql.php";

    $json=file_get_contents("callesgijon.json");
    $datos=json_decode($json,true);
    foreach($datos as $dat){
        /* foreach($dat as $k){
            foreach($k as $v){
                $clCalles->insertOne($v);
            }
        } */
        $clCalles->insertMany($dat);
    }

    $datos=$clCalles->find();
    $cont=0;
    foreach($datos as $dat){
        $conn->query("INSERT INTO calles (nombre,calle,tipo,numeroaccesos) VALUES ('{$dat['nombre']}', '{$dat['calle']}', '{$dat['tipo']}', '{$dat['nÚmeroaccesos']}')");
        $cont++;
    }
    echo "Datos introducidos".$cont;

    $conn->close;
    $ctdb->close;
?>