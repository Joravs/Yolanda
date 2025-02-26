<?php
    require_once './auth/comprobarlogueo.php';
    require_once '../bd/qryaddComida.php';

    function addRegister($dat){
        global $conn, $insrtComidas, $insrtHipo, $insrtHiper,$_SESSION;

        $insrtComidas->bind_param('ddddds',
        $_SESSION['idUsuario'],$dat['glu1'],$dat['glu2'],$dat['racion'],$dat['insulina'],$dat['tipoComida']);
        $insrtComidas->execute();
        
        $_SESSION['log']='Registro añadido correctamente';
        if(isset($dat['hipoper'])){
            if($dat['hipoper']=='hiper'){
                $insrtHiper->bind_param('dssdd',
                    $_SESSION['idUsuario'],$dat['tipoComida'],$dat['hipoperHora'],$dat['hipoperGlu'],$dat['correccion']
                );
                $insrtHiper->execute();
                $_SESSION['log']='Registro e Hiperglucemia añadidos correctamente';
            }elseif($dat['hipoper']=='hipo'){
                $insrtHipo->bind_param('dssd',
                    $_SESSION['idUsuario'],$dat['tipoComida'],$dat['hipoperHora'],$dat['hipoperGlu']
                );
                $insrtHipo->execute();
                $_SESSION['log']='Registro e Hipoglucemia añadidos correctamente';
            }
        }
        header('Location: ../../portfolio/');
        exit;
    }
    addRegister($_POST);
?>