<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>
    <h1>Hola <?php $_SESSION['usuario']?></h1>
    <?php
        for($i=0;$i<$_SESSION['cont'];$i++){
    ?>
    <form action="" method="post">
        <legend>Contacto $_SESSION['cont']</legend>
        <label for="nombre{$i}">Nombre:</label>
        <input type="text" name="nombre{$i}" id="nombre{$i}" required>
        <label for="telefono{$i}">Teléfono:</label>
        <input type="tel" name="telefono{$i}" id="telefono{$i}" required>
        <input type="submit" value="Enviar" name="enviar">
    </form>
    <?php
        }
    ?>
</body>
</html>