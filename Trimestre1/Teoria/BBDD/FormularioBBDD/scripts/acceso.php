<?php 
    require_once 'datdb.php';
    $ctdb=new mysqli($hn,$user,$pw,$db);

    if(isset($_POST['registro'])){
        $u=$_POST['usuarioreg'];
        $pass=$_POST['passwordreg'];
        $qryIns="Insert into usuarios (usu,contra) values ($u,$pass);";
        if($ctdb->connect_error){die("Connection Error");}
        else{
            $ctdb->query($qryIns);
            echo "Te has registrado";
        }
        $ctdb->close();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <form method="post" action="prueba.php">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name"><br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password"><br>
        <a href="registro.php">Resgistrarse</a><br>
        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>
</html>