<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Evaluable</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['usuario'];?>!</h1>
    <img src="imagen/20241212.jpg" height="300px">
    <form action="resultado.php" method="post">
        <label for="respuesta">Solucion al jeroglifico</label>
        <input type="text" name="respuesta" id="respuesta">
        <input type="submit" value="enviar" name="enviar">
    </form>
    <a href="puntos.php">Ver puntos por Jugador</a>
    <a href="resultado.php">Resultados del dia</a>
</body>
</html>