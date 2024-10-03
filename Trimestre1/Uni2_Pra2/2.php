<?php
    $matriz=array(array(1,14,8,3),array(6,19,7,2),array(3,13,4,1));

    for($i=0;$i<=2;$i++){
        for($j=0;$j<=3;$j++){
            echo $matriz[$i][$j]." ";
        }
        echo "<br>";
    }
?>