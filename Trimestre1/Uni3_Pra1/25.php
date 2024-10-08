<?php
    $amigos=array(
        'Madrid'=>array(
            'Nombre'=>"Pedro",
            'Edad'=> 32,
            'Telefono'=>"91-999.99.99"
        ),
        'Barcelona'=>array(
            'Nombre'=>"Susana",
            'edad'=> 34,
            'telefono'=>"93-000.00.00"
        ),
        'Toledo'=>array(
            'Nombre'=>"Sonia",
            'edad'=> 42,
            'telefono'=>"925-09.09.09"
        )
    );

    foreach($amigos as $ciudad => $datos){
        echo "En $ciudad: <br>";
        foreach($datos as $info=>$valor){
            if ($info=='Nombre')
            {echo "$info: $valor <br>";}
        }
    }
?>