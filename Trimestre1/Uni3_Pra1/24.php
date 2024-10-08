<?php
    $deportes=array("Futbol","Baloncesto","Natacion","Tenis");
    $total=count($deportes);
    for($i=0;$i<$total;$i++){
        echo $deportes[$i] ." ";
    }
    echo "<br>";
    echo $total;
    echo "<br>";
    echo current($deportes);
?>