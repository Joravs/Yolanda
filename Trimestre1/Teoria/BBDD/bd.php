<?php
    $hn = 'localhost';
    $db = 'bdsimon';    
    $u = 'jugador';
    $pw ='';

    $ctbd = new mysqli($hn,$u,$pw,$db);
    $salida=$ctbd->connect_error?"Fatal error: " . $ctbd->connect_error:"Coneection successfully connected";
    echo $salida;
?>