<?php
    require_once './datbd.php';
    $query="Select usu,contra from usuarios";
    $result=$ctbd->query($query);
    if($ctbd->connect_error)die ("Fatal error: ".$ctbd->connect_error);
    $rows=$result->num_rows;
    for($i=0;$i<$rows;$i++){
        $result->data_seek($i);
        echo "Usuario: ". htmlspecialchars($result->fetch_assoc()['usu']);
        $result->data_seek($i);
        echo "\t    Password ". htmlspecialchars($result->fetch_assoc()['contra'])."<br>";
    }
?>