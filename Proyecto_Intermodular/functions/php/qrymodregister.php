<?php
    require_once './auth/comprobarlogueo.php';
    require_once '../bd/qrymodhipoper.php';
    require_once '../bd/qrymodtodo.php';

    function modificarHipoper($dat){
        global $conn, $updateHiper,$updateHipo,$selectHipo,$selectHiper,$insertHipo,$insertHiper;

        $selectHiper->bind_param('dss',$_SESSION['idUsuario'],$dat['fecha'],$dat['tipocomida']);
        $selectHiper->execute();
        $selectHiper->store_result();
        $hrBolean=$selectHiper->num_rows>0?true:false;
        
        $selectHipo->bind_param('dss',$_SESSION['idUsuario'],$dat['fecha'],$dat['tipocomida']);
        $selectHipo->execute();
        $selectHipo->store_result();
        $hBolean=$selectHipo->num_rows>0?true:false;
        

        if(isset($dat['correccion'])){
            if(!$hBolean){
                if($hrBolean){                
                    $updateHiper->bind_param('sdddss',$dat['hipoperHora'],$dat['hipoperGlu'],$dat['correccion'],$_SESSION['idUsuario'],$dat['fecha'],$dat['tipocomida']);
                    $updateHiper->execute();
                }else{
                    $insertHiper->bind_param('dsssdd',$_SESSION['idUsuario'],$dat['fecha'],$dat['tipocomida'],$dat['hipoperHora'],$dat['hipoperGlu'],$dat['correccion']);
                    $insertHiper->execute();
                }
                $_SESSION['log']='Hiperglucemia modificada correctamente';
            }else{$_SESSION['log']='No se puede añadir una hiperglucemia si hay una hipoglucemia';}
        }else{
            if(!$hrBolean){
                if($hBolean){
                    $updateHipo->bind_param('sddss',$dat['hipoperHora'],$dat['hipoperGlu'],$_SESSION['idUsuario'],$dat['fecha'],$dat['tipocomida']);
                    $updateHipo->execute();
                }else{
                    $insertHipo->bind_param('dsssd',$_SESSION['idUsuario'],$dat['fecha'],$dat['tipocomida'],$dat['hipoperHora'],$dat['hipoperGlu']);
                    $insertHipo->execute();
                }
                $_SESSION['log']='Hipoglucemia modificada correctamente';
            }else{$_SESSION['log']='No se puede añadir una hipoglucemia si hay una hiperglucemia';}
        }
        header('Location: ../../portfolio/');
        exit;
    }
    function modificarTodo($dat){
        global $conn, $updateTodo;

        $updateTodo->bind_param('dddddss',$dat['glu1'],$dat['glu2'],$dat['racion'],$dat['insulina'],$_SESSION['idUsuario'],$dat['fecha'],$dat['tipocomida']);
        $updateTodo->execute();
        $_SESSION['log']='Registro modificado correctamente';
        header('Location: ../../portfolio/');
        exit;
    }
    if(isset($_POST['glu1'])){
        modificarTodo($_POST);
    }else{modificarHipoper($_POST);}
?>