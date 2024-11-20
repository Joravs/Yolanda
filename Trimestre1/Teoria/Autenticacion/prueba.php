<?php
    $usu="pepito";
    $pass="123";

    if(isset($_POST['enviar'])){
        if($_POST['name'] == $usu && $_POST['password'] == $pass){
            echo "Te has logeado";
        }else{
            echo "Usuario o contraseña incorrectos";
        }
    }
?>