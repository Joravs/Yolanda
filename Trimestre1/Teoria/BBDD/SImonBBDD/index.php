<?php
    require_once 'validacion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <h1>VAMOS A JUGAR AL SIMÓN!!!</h1>
    <form method="post" action="<?php validarUsuario();?>">
        <?php
            if(isset($_POST['enviar'])){
                echo "<spans style='color:red;>Datos Erroneos</spans>";
            }
        ?>
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br>
        <label for="clave">Clave:</label>
        <input type="password" id="clave" name="clave" required><br>
        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>
</html>