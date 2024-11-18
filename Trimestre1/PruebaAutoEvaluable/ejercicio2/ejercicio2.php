<?php
session_start();
    function generarBinario(){
        $bin=[0,1];
        $binario=[];
        for($i=0;$i<4;$i++){
            echo $binario[$i]=array_rand($bin);
        }
        return $binario;
    }
    function obtenerDecimal($binario){
        $vec2=[8,4,2,1];
        $decimal=0;
        for($i=0;$i<=count($binario)-1;$i++){
            if($binario[$i]==1){
                $decimal+=$vec2[$i];
            }
        }
        return $decimal;
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
    <h2>El numero en BINARIO: <?php $binario=generarBinario();$_SESSION['decimalcorrecto']=obtenerDecimal($binario);?></h2>
    <?php
        if(isset($binario)){
            for($i=0;$i<4;$i++){
                if($binario[$i]==1){
                    switch($i){
                        case 0:
                            echo "<img src='src/ocho.jpg'></img>";
                            break;
                        case 1:
                            echo "<img src='src/cuatro.jpg'></img>";                            
                            break;
                        case 2:
                            echo "<img src='src/dos.jpg'></img>";
                            break;
                        case 3:
                            echo "<img src='src/Uno.jpg'></img>";
                            break;
                    }
                }else{
                    echo "<img src='src/blanco.jpg'></img>";
                }
            }
        }
    ?>
    <form action="ejercicio21.php" method="post">
        <label for="decimal">Numero decimal</label>
        <input type="number" name="decimal" id="decimal">
        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>
</html>