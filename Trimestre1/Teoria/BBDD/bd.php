<?php
    $hn = 'localhost';
    $db = 'bdsimon';    
    $u = 'jugador';
    $pw ='';
    $ctbd = new mysqli($hn,$u,$pw,$db);
    $query="Select usu,contra from usuarios";
    $result=$ctbd->query($query);
    if($ctbd->connect_error)die ("Fatal error: ".$ctbd->connect_error);
    $rows=$result->num_rows;
    for($i=0;$i<$rows;$i++){
        $result=$result->data_seek($i);
        echo "Usuario ".$i+1 . htmlspecialchars($result->fetch_assoc()['usu']);
    }
?>