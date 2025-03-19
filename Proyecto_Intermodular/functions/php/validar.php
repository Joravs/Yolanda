<?php
    session_start();
    require_once 'auth/login.php';
    require_once 'auth/register.php';

    if(isset($_POST['login'])){
        validarLogin($_POST['username'],$_POST['passwd']);
    }else if(isset($_POST['register'])){
        validarRegistro($_POST['name'],$_POST['username'],$_POST['passwd'],$_POST['apellidos'],$_POST['fechaNac']);
    }
?>