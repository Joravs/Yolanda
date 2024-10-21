<?php
    function limites($array,$limite){
        $arraynuevo=array();
        foreach($array as $num){
            if ($num <= $limite){
                $arraynuevo[]=$num;
            }
        }
        return $arraynuevo;
    }

    $array=array(1,2,5,7,123,3,2);
    $limite=5;
    foreach(limites($array,$limite) as $num){
        echo $num ." ";
    }
?>