<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
        Seleccione de que color desea que sea la web de ahora en adelante:
        <input type="radio" name="color" value="Verde">
        <input type="radio" name="color" value="Rojo">
        <input type="radio" name="color" value="Azul">
        <input type="submit" value="Crear Cookie" name="enviar">
    </form>
    <p>Se crea la cookie</p>
    <a href="<?php echo $_SERVER["PHP_SELF"]?>">Ir a la otra web</a>
    <?php
        if(isset($_POST["enviar"])){
            
        }
    ?>
</body>
</html>