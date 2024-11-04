<?php
    $_COOKIE;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <form action="cookieaplicada.php" method="post">
        Seleccione de que color desea que sea la web de ahora en adelante:
        <input type="radio" name="color" value="Verde">
        <input type="radio" name="color" value="Rojo">
        <input type="radio" name="color" value="Azul">
        <input type="submit" value="Crear Cookie" name="enviar">
        <?php
            if(isset($_POST["enviar"])){
                setcookie("color", $_POST["color"]);
            }
        ?>
    </form>
</body>
</html>