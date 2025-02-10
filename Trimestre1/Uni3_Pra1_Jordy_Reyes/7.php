<?php
    for($i=0;$i<3;$i++){
        $num=0;
        $acumulador=0;
        for($j=0;$j<4;$j++){
           echo $matriz[$i][]=rand(1,100) . " ";
           if ($matriz[$i][$j]>$num){
                $num=$matriz[$i][$j];
            }
            $acumulador+=$matriz[$i][$j];
        }
        $arrayprom[]=$acumulador/4;
        $arraymax[]=$num;
        echo "<br>";
    }
    echo "<br>";
    foreach($arraymax as $elemmax){
        echo $elemmax . " "; 
    }
    echo "<br>";
    foreach($arrayprom as $elemprom){
        echo $elemprom . " "; 
    }
?>