<?php
    require_once 'datdb.php';
    $ctdb=new mysqli($hn,$user,$pw,$db);
    if(isset($_POST['enviar'])){
        if($ctdb->connect_error){die("Connection Error");}
        else{
            $u=$_POST['name'];
            $pass=$_POST['password'];
            $qury="Select usu,contra from usuarios where usu='$u' AND contra='$pass'";
            $result=$ctdb->query($qury);
            if($result){}
            else{
                $uValido=htmlspecialchars($result->fetch_assoc()['usu']);
                $result->data_seek(0);
                $passValido=htmlspecialchars($result->fetch_assoc()['contra']);
            }
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