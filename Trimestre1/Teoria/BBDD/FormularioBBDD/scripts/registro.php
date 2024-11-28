<?php
    session_start();
    $_SESSION['incorrect']=0;
    function validarContra(){
        if(isset($_POST['registro'])){
            if($_POST['passwordreg']==$_POST['passwordreg2']){
                echo 'acceso.php';
            }else{
                $_SESSION['incorrect']=1;
                echo $_SERVER['PHP_SELF'];
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
        <?php if($_SESSION['incorrect']==1){echo 'Contraseñas no coinciden';}?>
        <label for="usuarioreg">Usuario: </label>
        <input type="text" name="usuarioreg" id="usuarioreg">
        <label for="passwordreg">Contraseña: </label>
        <input type="password" name="passwordreg" id="passwordreg" required>
        <label for="passwordreg2">Repite a contraseña: </label>
        <input type="password" name="passwordreg2" id="passwordreg2" required>
        <input type="submit" value="Registrarse" name="registro">
</body>
</html>