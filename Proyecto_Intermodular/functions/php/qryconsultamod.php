<?php
    require_once '../functions/bd/qrymod.php';

    function consultarMod($username){
        global $conn,$selectTabla;
        
        $selectTabla->bind_param('s', $username);
        $selectTabla->execute();
        return $selectTabla;
    }

    function consultaLentaDeporte($username){
        global $conn,$selectLD;
        
        $selectLD->bind_param('s', $username);
        $selectLD->execute();
        return $selectLD;
    }
?>