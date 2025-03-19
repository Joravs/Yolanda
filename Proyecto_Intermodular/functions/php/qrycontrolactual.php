<?php
    require_once '../bd/qrycontrolhoy.php';

    function insertHoy(){
        global $conn,$insrtControl,$slectHoy,$_SESSION;
        
        $slectHoy->bind_param('d', $_SESSION['idUsuario']);
        $slectHoy->execute();
        $slectHoy->store_result();
        if($slectHoy->num_rows==0){
            $insrtControl->bind_param('d', $_SESSION['idUsuario']);
            $insrtControl->execute();
        }
    }
?>