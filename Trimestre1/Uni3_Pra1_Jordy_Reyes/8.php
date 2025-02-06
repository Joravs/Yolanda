<?php
    $num=0;
    for($i=0;$i<10;$i++){
        for($j=0;$j<10;$j++){
           echo $matriz[$i][]=rand(1,100). " ";
           if ($num<$matriz[$i][$j]){
                $num=$matriz[$i][$j];
                $fil_col = "; Fila: ". $i . ", Columna: " . $j;
           }
        }
        echo "<br>";
    }

    echo "<br>".$num . $fil_col;
?>