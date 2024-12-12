<?php
    session_start();
    $_SESSION['error']=0;
    require_once 'db.php';
    
    if(isset($_POST['enviar'])){
        $usuarioValidar=$_POST['usuario'];
        $claveValidar=$_POST['clave'];
        $qrySelect="select nombre,login,clave from jugador where login= '$usuarioValidar' and clave= '$claveValidar'";
        $result=$ctdb->query($qrySelect);
        $usuarioValido=$result->fetch_assoc()['nombre'];
        $ctdb->close();
        if($result->num_rows>0){
            $_SESSION['usuario']=$usuarioValido;
            $_SESSION['uName']=$usuarioValidar;
            header('Location: inicio.php');
            exit;
        }else{
            $_SESSION['error']=1;
            header('Location: index.php');
            exit;
        }
    }
?>