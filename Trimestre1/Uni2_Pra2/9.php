<?php
    for($i=0;$i<20;$i++){
        for($j=0;$j<20;$j++){
         echo $matriz[$i][]=rand(1,100). " ";
        }
        echo "<br>";
    }

    $mostrar=0;
    for ($j=0;$j<20;$j++){
        $num=0;
        for ($i=0;$i<20;$i++){
            $num+=$matriz[$j][$i];
        }

        if ($num>$mostrar){
            $mostrar=$num;
        }
    }
    echo "<br>".$mostrar . " ";
?>