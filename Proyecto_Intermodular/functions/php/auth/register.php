<?php
    require_once '../bd/ctdb.php';

    function validarRegistro($name,$username,$passwd,$surname,$fechNac){
        global $conn;

        $password_hashed=password_hash($passwd, PASSWORD_BCRYPT);
        $inst=$conn->prepare('INSERT INTO `usuario` (`nombre`,`apellido`,`fechaNac`,`username`,`password`) VALUES (?,?,?,?,?)');
        $inst->bind_param('sssss', $name, $surname,$fechNac,$username, $password_hashed);
        $inst->execute();
        $_SESSION['registrado']=1;
        header('Location: ../..');
        exit;
    }
?>