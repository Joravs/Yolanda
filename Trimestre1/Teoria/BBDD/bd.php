<?php
    require_once './datbd.php';
    $query="Select * from usuarios";
    $ctbd = new mysqli($hn,$u,$pw,$db);
    $result=$ctbd->query($query);
    if($ctbd->connect_error)die ("Fatal error: ".$ctbd->connect_error);
    $rows=$result->num_rows;
    for($i=0;$i<$rows;$i++){
        $result->data_seek($i);
        echo "Usuario: ". htmlspecialchars($result->fetch_assoc()['usu']);
        $result->data_seek($i);
        echo "\tPassword ". htmlspecialchars($result->fetch_assoc()['contra'])."<br>";
        $result->data_seek($i);
        echo "\tRol ". htmlspecialchars($result->fetch_assoc()['rol'])."<br>";
    }
?>