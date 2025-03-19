<?php
    require_once './auth/comprobarlogueo.php';
    require_once '../bd/qrymodld.php';

    function updateLD($dat){
        global $conn, $updateL,$updateD;

        if(isset($dat['deporte'])){
            $updateD->bind_param('dds',$dat['deporte'],$_SESSION['idUsuario'],$dat['fecha']);
            $updateD->execute();
            $_SESSION['log']='Deporte modificado correctamente';
        }else{
            $updateL->bind_param('dds',$dat['lenta'],$_SESSION['idUsuario'],$dat['fecha']);
            $updateL->execute();
            $_SESSION['log']='Dosis lenta modificada correctamente';
        }
        header('Location: ../../portfolio/');
        exit;
    }
    updateLD($_POST);
?>