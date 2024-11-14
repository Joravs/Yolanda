<?php
    function generarBinario(){
        $bin=[0,1];
        $binario=[];
        for($i=0;$i<4;$i++){
            echo $binario[$i]=array_rand($bin);
        }
        return $binario;
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
    <h2>El numero en BINARIO: <?php $binario=generarBinario();?></h2>
    <?php
        if(isset($binario)){
            for($i=0;$i<4;$i++){
                if($binario[$i]==1){
                    switch($i){
                        case 0:
                            echo "<img src='src/ocho.jpg'></img>";
                        case 1:
                            echo "<img src='src/cuatro.jpg'></img>";                            
                        case 2:
                            echo "<img src='src/dos.jpg'></img>";
                        case 3:
                            echo "<img src='src/Uno.jpg'></img>";
                    }
                }else{
                    echo "<img src='src/blanco.jpg'></img>";
                }
            }
        }
    ?>
    <form action="ejercicio21.ph" method="post">
        <label for="decimal">Numero decimal</label>
        <input type="number" name="decimal" id="decimal">
        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>
</html>