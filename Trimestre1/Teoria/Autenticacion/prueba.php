<?php
    session_start();
    $_SESSION['usu']="pepito";
    $_SESSION['pass']="123";
    $_SESSION['rol']="prime";
    
    if(isset($_POST['enviar'])){
        if($_POST['name'] == $usu && $_POST['password'] == $pass){
            echo "Te has logeado";
        }else{
            echo "Usuario o contraseña incorrectos";
        }
    }
?>