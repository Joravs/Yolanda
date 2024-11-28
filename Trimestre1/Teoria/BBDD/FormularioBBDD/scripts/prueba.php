<?php
    require_once 'datdb.php';
    $ctdb=new mysqli($hn,$db,$user,$pw);
    if(isset($_POST['enviar'])){
        if($ctdb->connect_error){die("Connection Error");}
        else{
            $u=$_POST['name'];
            $pass=$_POST['password'];
            $qury="SELECT usu,contra FROM usuarios WHERE usu=$u AND contra=$pass";
            $result=$ctdb->query($qury);
            $uValido=$result->fetch_assoc()["usu"];
            $passValido=$result->fetch_assoc()["contra"];
            if($uValido==$u && $passValido==$pass){
                echo "Te has logeado";
                echo '<a href="acceso.php">Vuelve al Inicio</a>';
            }else{
                echo "Usuario o contraseña incorrectos<br>";
                echo '<a href="acceso.php">Volver a Intentarlo</a>';
            }
        }
    }
?>