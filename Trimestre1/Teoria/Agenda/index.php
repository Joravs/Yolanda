<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <h1>AGENDA DE CONTACTOS</h1>
    <form method="post" action="validacion.php">
        <?php if(isset($_SESSION['error'])){if($_SESSION['error']==1){echo "<span style='color:red;'>Datos Incorrectos</span><br>";}} ?>
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br>
        <label for="clave">Clave:</label>
        <input type="password" id="clave" name="clave" required><br>
        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>
</html>