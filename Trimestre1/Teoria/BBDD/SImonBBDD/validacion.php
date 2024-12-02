<?php
    session_start();
    require_once 'datdb.php';
    $ctdb=new mysqli($hn,$user,$pw,$db);
    if($ctdb->connect_error)die("Error connecting to");
    else{
    if(isset($_POST['enviar'])){
        $usuarioValidar=$_POST['usuario'];
        $claveValidar=$_POST['clave'];
        $qrySelect="select Nombre,Clave from usuarios where Nombre: '".$usuarioValidar."' and Clave: '".$claveValidar."'";
        $result=$ctdb->query($qrySelect);
        if($result->num_rows>0){
            $_SESSION['usuario']=$usuarioValidar;
            echo "inicio.php";
        }else{
            echo $_SERVER['PHP_SELF'];
        }
    }
    }
?>