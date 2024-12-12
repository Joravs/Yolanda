<?php
    require_once 'db.php';
    $diafinal=mktime(0,0,0,(int)$_POST['mes']+1,0,(int)$_POST['anio']);
    $inicio=date("N",$diainicial);
    $qryInsert="insert into respuestas(fecha,login,hora,respuesta) values($fecha,'{$_SESSION['uName']}',$hora,'{$_POST['respuesta']}')";
    $ctdb->query($qryInsert);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Evaluable</title>
</head>
<body>
    
</body>
</html>