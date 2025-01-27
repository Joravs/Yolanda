<?php
    require_once "C:/xampp/php/vendor/autoload.php";
    $ctdb = new MongoDB\Client("mongodb://localhost:27017");
    $db=$ctdb->Gijon;
    $clCalles=$db->Calles2;
?>