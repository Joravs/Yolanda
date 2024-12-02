<?php
    session_start();
    require_once 'pintar-circulos.php';
    $_SESSION['coloresValidos']=[$colores[array_rand($colores)],$colores[array_rand($colores)],$colores[array_rand($colores)],$colores[array_rand($colores)]];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h1>SIMON</h1>
    <h2>Hola, <?php echo $_SESSION['usuario']?>, memoriza la combinacion</h2>
    <?php pintar_circulos($_SESSION['coloresValidos']);?>
    <form action="jugar.php" method="post">
        <BR>
        <button type="submit" value="jugar">VAMOS A JUGAR</button>
    </form>
</body>
</html>