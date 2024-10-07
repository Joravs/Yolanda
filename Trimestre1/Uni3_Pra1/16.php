<?php
    $lenguajes_cliente=array(
        'JS'=>"JavaScript", 'NJS'=>"Node.JS", 'R'=>"React"
    );
    $lenguajes_servidor=array(
        'PHP'=>"PHP", 'JAVA'=>"Java", 'Py'=>"Python"
    );
    
    foreach($lenguajes_cliente as $i => $cliente){
        $lenguajes[$i]=$cliente;
    };
    foreach($lenguajes_servidor as $j => $servidor){
        $lenguajes[$j]=$servidor;
    };

    foreach ($lenguajes as $index => $lenguaje){
        echo "$index : $lenguaje <br>";
    }
?>