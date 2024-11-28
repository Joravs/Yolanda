<?php
    session_start();
    $_SESSION['incorrect']=0;
    function validarContra(){
        if(isset($_POST['registro'])){
            if($_POST['passwordreg']==$_POST['passwordreg2']){
                echo 'index.php';
            }else{
                $_SESSION['incorrect']=1;
                echo $_SERVER['PHP_SELF'];
            }
        }
    }
    function validacion(){
        if($_SESSION['incorrect']==1){
            $u=$_POST['usuarioreg'];
            $pass=$_POST['passwordreg'];
            $rol=$_POST['rol'];
            $qrySelect="Select usu from usuarios where usu='$u'";
            if ($ctdb->query($qrySelect)){
                if ($ctdb->num_rows($qrySelect)>0){
                    echo "El usuario ya existe";
                    return;
                }else{
                    $qryIns="Insert into usuarios (usu,contra,rol) values ('$u','$pass','$rol');";
                    if($ctdb->connect_error){die("Connection Error");}
                    else{
                        $ctdb->query($qryIns);
                        echo "Te has registrado";
                    }
                    $ctdb->close();
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>Registro</h1>
    <form action="<?php validarContra();?>" method="post">
        <?php if($_SESSION['incorrect']==1){echo '<span style="color:red;">Contraseñas no coinciden</span><br>';}?>
        <label for="usuarioreg">Usuario: </label>
        <input type="text" name="usuarioreg" id="usuarioreg" required>
        <label for="passwordreg">Contraseña: </label>
        <input type="password" name="passwordreg" id="passwordreg" required>
        <label for="passwordreg2">Repite a contraseña: </label>
        <input type="password" name="passwordreg2" id="passwordreg2" required>
        <label for="rol">Rol: </label>
        <select name="rol" id="rol">
            <option value="jugador">Jugador</option>
        </select>
        <input type="submit" value="Registrarse" name="registro"><br>
        <a href="index.php">Iniciar Sesion</a><br>
</body>
</html>