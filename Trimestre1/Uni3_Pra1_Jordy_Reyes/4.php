<?php
    for($i=0;$i<4;$i++){
        for($j=0;$j<4;$j++){
            echo $matriz[$i][]=rand(1,100) ." ";
        }
        echo "<br>";
    }
    echo "<br>";
    for($i=0;$i<4;$i++){
        echo $matriz[$i][$i]. " ";
    }
    echo "<br>";
    for($i=0;$i<4;$i++){
        echo $matriz[count($matriz)-1-$i][$i] . " ";
    }
?>