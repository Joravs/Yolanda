<?php
    session_start();
    $_SESSION['incorrect']=0;
    function validarContra(){
        if(isset($_POST['registro'])){
            $u=$_POST['usuarioreg'];
            $pass=$_POST['passwordreg'];
            $rol=$_POST['rol'];
            $qrySelect="Select usu from usuarios where usu='$u'";
            $resSelect=$ctdb->query($qrySelect);
            if ($resSelect){
                if ($resSelect->num_rows>0){
                    $_SESSION['incorrect']=2;
                    var_dump($resSelect);
                    echo $_SERVER['PHP_SELF'];
                }else{
                    if($pass==$_POST['passwordreg2']){
                    $qryIns="Insert into usuarios (usu,contra,rol) values ('$u','$pass','$rol');";
                    if($ctdb->connect_error){die("Connection Error");}
                    else{
                        $ctdb->query($qryIns);
                        echo "index.php";
                    }
                    $ctdb->close();}
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
        <?php if($_SESSION['incorrect']==1){echo '<span style="color:red;">Contraseñas no coinciden</span><br>';}
                else if($_SESSION['incorrect']==2){echo '<span style="color:red;">El usuario ya existe</span><br>';}?>
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