<?php
    $deportes=array("Futbol","Baloncesto","Natacion","Tenis");
    $total=count($deportes);
    for($i=0;$i<$total;$i++){
        echo $deportes[$i] ." ";
    }
    echo "<br>$total";
    $pos=current($deportes);
    echo "<br>".$pos;
    $pos=next($deportes);
    echo "<br>".$pos;
    $pos=end($deportes);
    echo "<br>".$pos;
    $pos=prev($deportes);
    echo "<br>".$pos;
?>