<?php
    require_once "../ctdbMongo.php";

    $dato=["calle"=>"LLOREU"];
    $result=$clCalles->find($dato);

    foreach($result as $calle){
        echo $calle;
    }
    /* $clCalles->deleteOne($dato); */
?>