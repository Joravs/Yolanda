<?php
    $M = array( 
        array( array(), array() ),
        array( array(), array() ),
        array( array(), array() )
        );
    $cont1=1;
    for ($i=0;$i<=1;$i++){
        for($j=0;$j<=2;$j++){
            $N [$index][$cont]=$cont1;
            $cont1++;
        }
    } 
    echo $N[1][2] . "<br>";

    var_dump ($N);
?>