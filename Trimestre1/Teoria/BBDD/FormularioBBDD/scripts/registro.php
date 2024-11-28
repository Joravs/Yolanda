<?php
    session_start();
    $_SESSION['incorrect']=0;
    
    function validarContra(){
        require_once 'datdb.php';
        $ctdb=new mysqli($hn,$user,$pw,$db);
        if(isset($_POST['registro'])){
            $usuario=$_POST['usuarioreg'];
            $result=$ctdb->query("SELECT usu FROM usuarios WHERE usu='$usuario'");
            if($result->num_rows>0){
                $_SESSION['incorrect']=2;
                echo $_SERVER['PHP_SELF'];
            }else if($_POST['passwordreg']==$_POST['passwordreg2']){
                echo 'index.php';
            }else{
                $_SESSION['incorrect']=1;
                echo $_SERVER['PHP_SELF'];
            }
        }
        $ctdb->close();
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
            elseif($_SESSION['incorrect']==2){echo '<span style="color:red;">El usuario ya existe</span><br>';}?>
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