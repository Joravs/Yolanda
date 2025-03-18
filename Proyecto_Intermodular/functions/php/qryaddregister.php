<?php
    require_once './auth/comprobarlogueo.php';
    require_once '../bd/qryaddComida.php';
    require_once '../bd/qrycontrolDia.php';

    function addRegister($dat){
        global $conn, $insrtComidas, $insrtHipo, $insrtHiper,$_SESSION, $insrtControl,$slectHoy;
    
    try{
        $slectHoy->bind_param('ds', $_SESSION['idUsuario'],$dat['fecha']);
        $slectHoy->execute();
        $slectHoy->store_result();
        if($slectHoy->num_rows==0){
            $insrtControl->bind_param('ds', $_SESSION['idUsuario'],$dat['fecha']);
            $insrtControl->execute();
        }
        $insrtComidas->bind_param('dsdddds',
        $_SESSION['idUsuario'],$dat['fecha'],$dat['glu1'],$dat['glu2'],$dat['racion'],$dat['insulina'],$dat['tipoComida']);
        $insrtComidas->execute();
        
        $_SESSION['log']='Registro añadido correctamente';
        if(isset($dat['hipoper'])){
            if($dat['hipoper']=='hiper'){
                $insrtHiper->bind_param('dsssdd',
                    $_SESSION['idUsuario'],$dat['fecha'],$dat['tipoComida'],$dat['hipoperHora'],$dat['hipoperGlu'],$dat['correccion']
                );
                $insrtHiper->execute();
                $_SESSION['log']='Registro e Hiperglucemia añadidos correctamente';
            }elseif($dat['hipoper']=='hipo'){
                $insrtHipo->bind_param('dsssd',
                    $_SESSION['idUsuario'],$dat['fecha'],$dat['tipoComida'],$dat['hipoperHora'],$dat['hipoperGlu']
                );
                $insrtHipo->execute();
                $_SESSION['log']='Registro e Hipoglucemia añadidos correctamente';
            }
        }
        header('Location: ../../portfolio/');
        exit;
    }catch(mysqli_sql_exception $e){
        $_SESSION['log']='Registro añadido con anterioridad';
        header('Location:../../portfolio/');
        exit;
    }
    }
    addRegister($_POST);
?>