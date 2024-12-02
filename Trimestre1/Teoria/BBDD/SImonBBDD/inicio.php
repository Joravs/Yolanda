<?php
    session_start();
    require_once 'pintar-circulos.php';

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
    <h2>Hola, <?php $_SESSION['usuario']?>, memoriza la combinacion</h2>

    <?php pintar_circulos($coloresRand[0],$coloresRand[1],$coloresRand[2],$coloresRand[3]);?>
</body>
</html>