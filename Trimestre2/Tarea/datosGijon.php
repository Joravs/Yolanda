<?php
    require_once "../ctdbMongo.php";

    $JSONtoBSON=MongoDB\BSON\fromJSON(file_get_contents("callesgijon.json"));
    $clCalles->insert($JSONtoBSON);
?>