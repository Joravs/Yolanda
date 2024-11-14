<?php
    function generarBinario(){
        $bin=[0,1];
        $binario=[];
        for($i=0;$i<4;$i++){
            echo $binario[$i]=array_rand($bin);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Adivina el numero en decimal</h1>
    <h2>El numero en BINARIO: <?php generarBinario();?></h2>
    
</body>
</html>