<?php
    $num1=rand(1,1000);
    $numperfecto=0;

    echo $num1;
    for ($i=1;$i<=$num1/2;$i++){
        if ($num1%$i==0){
            $numperfecto+=$i;
        }
    }
    if($numperfecto==$num1){
        echo " Numero perfecto: " . $num1;
    }
?>