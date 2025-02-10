<?php 
    session_start();
    $_SESSION['usu']=$_SESSION['usu']?$_SESSION['usu']:"pepito";
    $_SESSION['pass']=$_SESSION['pass']?$_SESSION['pass']:"123";
    $_SESSION['rol']=$_SESSION['rol']?$_SESSION['rol']:"prime";

    if(isset($_POST['registro'])){
        $_SESSION['usu']=$_POST['usuario'];
        $_SESSION['pass']=$_POST['password'];
        $_SESSION['rol']=$_POST['rol'];
        echo "Te has registrado";
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