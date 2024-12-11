<?php
    require_once 'datdb.php';
    session_start();
    /* $ctdb=new mysqli($hn,$user,$pw,$db);
    if($ctdb->connect_error) die("Error connecting"); */
    $qryInsert="INSERT INTO contactos (nombre,email,telefono,codusuario) values ".
    for($i=1;$i<=$_SESSION['cont'];$i++){
        echo 
    }
?>