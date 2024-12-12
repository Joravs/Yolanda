<?php
    require_once 'db.php';
    $fecha=date('Y-m-d',time());
    $hora=date('h:i:s',time());
    $qryInsert="insert into respuestas(fecha,login,hora,respuesta) values($fecha,'{$_SESSION['uName']}',$hora,'{$_POST['respuesta']}')";
    $ctdb->query($qryInsert);

    $qryAciertos="select login from jugador where (select respuesta from respuestas)in(select solucion from solucion) group by login";
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
    Jugadores acertantes:
</body>
</html>