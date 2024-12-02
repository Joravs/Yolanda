<?php
    session_start();
    require_once 'datdb.php';
    $ctdb=new mysqli($hn,$user,$pw,$db);
    if($ctdb->connect_error) die("Error connecting");
    $qryStats="SELECT Codigo, Nombre, count(acierto) from usuarios,jugadas where Codigo=codigousu group by Codigo,Nombre";
    $resultStats=$ctdb->query($qryStats);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadisticas</title>
</head>
<body>
    
</body>
</html>