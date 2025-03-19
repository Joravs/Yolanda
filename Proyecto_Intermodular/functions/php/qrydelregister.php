<?php
    require_once './auth/comprobarlogueo.php';
    require_once '../bd/qrydelRegister.php';

    function deleteRegister($dat){
        global $conn, $deleteReg, $deleteRegHipo, $deleteRegHiper;

        if (isset($dat['hipo'])){
            $deleteRegHipo->bind_param('ssd', $dat['tipocomida'],$dat['fecha'],$_SESSION['idUsuario']);
            $deleteRegHipo->execute();
            $_SESSION['log']='Hipoglucemia eliminada correctamente';
        }else if (isset($dat['hiper'])){
            $deleteRegHiper->bind_param('ssd', $dat['tipocomida'],$dat['fecha'],$_SESSION['idUsuario']);
            $deleteRegHiper->execute();
            $_SESSION['log']='Hiperglucemia eliminada correctamente';
        }else if (isset($dat['completa'])){
            $deleteReg->bind_param('ssd', $dat['tipocomida'],$dat['fecha'],$_SESSION['idUsuario']);
            $deleteReg->execute();
            $_SESSION['log']='Registro eliminado correctamente';
        }
        header('Location: ../../portfolio/');
        exit;
    }
    deleteRegister($_POST);
?>