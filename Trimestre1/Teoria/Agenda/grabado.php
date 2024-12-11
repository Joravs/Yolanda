<?php
    require_once 'datdb.php';
    session_start();
    $ctdb=new mysqli($hn,$user,$pw,$db);
    if($ctdb->connect_error) die("Error connecting");
    $qryUsuario="Select codigo from usuarios where Nombre='{$_SESSION['usuario']}'";
    $us=$ctdb->query($qryUsuario);
    $codigousu=$us->fetch_assoc()['codigo'];
    for($i=1;$i<=$_SESSION['cont'];$i++){
        $qryInsert="INSERT INTO contactos (nombre,email,telefono,codusuario) values ({$_POST['nombre'.$i]},{$_POST['email'.$i]},{$_POST['telefono'.$i]},$codigousu)";
        $ctdb->query($qryInsert);
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>
    <h1>Hola <?php echo $_SESSION['usuario']?></h1>    
    <p>Se han grabado <?php echo $_SESSION['cont']?> contactos de <?php echo $_SESSION['usuario']?></p>
    <a href="index.php">Volver a logearse</a>
    <a href="inicio.php">introducir mas contactos para <?php echo $_SESSION['usuario']?></a>
    <a href="totales.php">Total de contactos guardados</a>
</body>
</html>