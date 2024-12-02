<?php
    session_start();
    require_once 'pintar-circulos.php';
    $ur=$_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acierto</title>
</head>
<body>
    <h1>SIMON</h1>
    <h2><?php echo $ur; ?> enhorabuena, has acertado</h2>
    <?php pintar_circulos($_SESSION['coloresValidos']);?>
    <?php
        require_once 'datdb.php';
        $ctdb=new mysqli($hn,$user,$pw,$db);
        if($ctdb->connect_error)die("Error connecting");
        $qryInsert="INSERT INTO jugadas (codigousu,acierto) VALUES ((SELECT Codigo FROM usuarios where Nombre='$ur'),1);";
        $ctdb->query($qryInsert);
        $ctdb->close();
    ?>
    <p>Se ha guardado en la base de datos</p>
    <a href="inicio.php">Volver a jugar</a>
    <a href="estadisticas.php">Estadisticas</a>
</body>
</html>