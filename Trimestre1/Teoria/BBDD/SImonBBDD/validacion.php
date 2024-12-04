<?php
    session_start();
    $_SESSION['error']=0;
    var_dump($_POST);
    
    function validarUsuario(){
        require_once 'datdb.php';
        $ctdb=new mysqli($hn,$user,$pw,$db);
        if($ctdb->connect_error)die("Error connecting");
        else{
        if(isset($_POST['enviar'])){
            $usuarioValidar=$_POST['usuario'];
            $claveValidar=$_POST['clave'];
            $qrySelect="select Nombre,Clave from usuarios where Nombre= '$usuarioValidar' and Clave= '$claveValidar'";
            $result=$ctdb->query($qrySelect);
            $ctdb->close();
            if($result->num_rows>0){
                $_SESSION['usuario']=$usuarioValidar;
                echo "inicio.php";
            }else{
                $_SESSION['error']=1;
                echo $_SERVER['PHP_SELF'];
            }
        }
    }
}
?>