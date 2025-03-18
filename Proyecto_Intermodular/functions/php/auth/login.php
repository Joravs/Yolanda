<?php
    require_once './qrycontrolactual.php';
    
    function validarLogin($username,$pwd){
        global $conn;

        $slct=$conn->prepare('Select idUsuario,nombre,password from usuario where username=?');
        $slct->bind_param('s', $username);
        $slct->execute();
        $slct->store_result();

        if($slct->num_rows==1){
            $slct->bind_result($id,$name, $hashed);
            $slct->fetch();
/*             echo $name.' '.$hashed.' '.$username; */
            $_SESSION['username']=$username;
            $_SESSION['idUsuario']=$id;
            $_SESSION['nombreUsuario']=$name;
            if(password_verify($pwd, $hashed)){
                insertHoy();
                header ('Location: ../../portfolio/');
                exit;
            }
        }
        $_SESSION['errorLogin']=1;
        header('Location: ../..');
        exit;
    }
?>