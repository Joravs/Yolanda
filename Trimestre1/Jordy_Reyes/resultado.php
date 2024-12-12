<?php
    require_once 'db.php';
    $fecha=date('Y-m-d',time());
    $hora=date('h:i:s',time());
    $qryInsert="insert into respuestas(fecha,login,hora,respuesta) values($fecha,'{$_SESSION['uName']}',$hora,'{$_POST['respuesta']}')";
    $ctdb->query($qryInsert);

    $qryAciertos="select login,hora,count(solucion) from jugador,solucion,respuestas where (select solucion from solucion where fecha={$fecha})=(select respuesta from respuestas where fecha={$fecha}) group by login";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Evaluable</title>
</head>
<body>
    <h1>Fecha: <?php echo $fecha;?></h1>
    <h2>Jugadores acertantes: </h2>
</body>
</html>