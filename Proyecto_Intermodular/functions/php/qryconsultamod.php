<?php
    require_once '../functions/bd/qrymod.php';

    function consultarMod($username, $fecha){
        global $conn,$selectTabla;
        
        $selectTabla->bind_param('ss', $username,$fecha);
        $selectTabla->execute();
        return $selectTabla;
    }

    function consultaLentaDeporte($username, $fecha){
        global $conn,$selectLD;
        
        $selectLD->bind_param('ss', $username,$fecha);
        $selectLD->execute();
        return $selectLD;
    }
?>