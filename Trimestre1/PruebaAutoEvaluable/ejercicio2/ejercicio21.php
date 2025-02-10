<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2-1</title>
</head>
<body>
    <?php
        if($_SESSION['decimalcorrecto']!=$_POST['decimal']){
    ?>
        <h1>Has fallado,vuelve a jugar</h1>
    <?php
        }else{
            echo '<h1>Respuesta acertada el numero es,'.$_POST['decimal'].'</h1>';
        }
    ?>
    <a href="ejercicio2.php">Volver a Jugar</a>
</body>
</html>