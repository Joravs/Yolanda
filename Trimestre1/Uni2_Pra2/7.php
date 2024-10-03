<?php
    $arraymax=array();
    for($i=0;$i<3;$i++){
        $num=0;
        for($j=0;$j<4;$j++){
           echo $matriz[$i][]=rand(1,100) . " ";
           if ($matriz[$i][$j]>$num){
                $num=$matriz[$i][$j];
            }
        }
        $arraymax[$i]=$num;
        echo "<br>";
    }
    echo "<br>";
    foreach($arraymax as $elemmax){
        echo $elemmax . " ";
    }
?>