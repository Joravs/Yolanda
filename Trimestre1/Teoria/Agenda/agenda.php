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
    <form action="" method="post">
    <?php
        for($i=0;$i<$_SESSION['cont'];$i++){
        echo `
            <fieldset>Contacto {$_SESSION['cont']}</fieldset>
            <label for="nombre{$i}">Nombre {$i}:</label>
            <input type="text" name="nombre{$i}" id="nombre{$i}" required>
            <label for="email1">Email {$i}</label>
            <input type="email" name="email{$i}" id="email{$i}" required>
            <label for="telefono{$i}">Teléfono {$i}:</label>
            <input type="tel" name="telefono{$i}" id="telefono{$i}" required>
        `;
        }
    ?>
    <input type="submit" value="grabar" name='grabar'>
    </form>
</body>
</html>