<?php
    function test_entrada($valor){
        $valor=trim($valor);
        $valor=stripslashes($valor);
        return $valor;
    }

    $valor=" Es tu nombre O\'reilly? ";
    echo test_entrada($valor);
?>