<?php
    $hn = 'localhost';
    $db = 'bdsimon';    
    $u = 'jugador';
    $pw ='';
    $ctbd = new mysqli($hn,$u,$pw,$db);
    $query="Select usu,contra from usuarios";
    $result=$ctbd->query($query);
    if($ctbd->connect_error){die ("Fatal error: ".$ctbd->connect_error);}
    else{if(!$result){die("Fatal error: ".$resul);}else{echo htmlspecialchars($result->fetch_assoc()['usu']);}}
?>