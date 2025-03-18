<?php
    require_once '../functions/bd/qryTablaCompleta.php';

    function consultarTabla($username,$fecha,$c){
        global $conn,$selectTabla;
        
        $selectTabla->bind_param('sss', $username, $fecha,$c);
        $selectTabla->execute();
        return $selectTabla;
    }
?>