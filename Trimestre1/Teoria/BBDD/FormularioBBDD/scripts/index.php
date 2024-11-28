<?php 
    require_once 'datdb.php';
    $ctdb=new mysqli($hn,$user,$pw,$db);

    if(isset($_POST['registro'])){
        $u=$_POST['usuarioreg'];
        $pass=$_POST['passwordreg'];
        $rol=$_POST['rol'];
        $qrySelect="Select usu from usuarios where usu='$u'";
        if ($ctdb->query($qrySelect)){
            if ($ctdb->num_rows($qrySelect)>0){
                echo "El usuario ya existe";
            }else{
                $qryIns="Insert into usuarios (usu,contra,rol) values ('$u','$pass','$rol');";
                if($ctdb->connect_error){die("Connection Error");}
                else{
                    $ctdb->query($qryIns);
                }
                $ctdb->close();
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="prueba.php">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br>
        <a href="registro.php">Registrarse</a><br>
        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>
</html>