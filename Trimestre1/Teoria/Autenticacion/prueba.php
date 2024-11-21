<?php
    session_start();
    $usu=$_SESSION['usu'];
    $pass=$_SESSION['pass'];
    $rol=$_SESSION['rol'];

    if(isset($_POST['enviar'])){
        if($_POST['name'] == $usu && $_POST['password'] == $pass){
            echo "Te has logeado";            
        }else{
            echo "Usuario o contraseña incorrectos<br>";
            echo '<a href="acceso.php">Volver a Intentarlo</a>';
        }
    }
?>