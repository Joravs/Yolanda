<?php
    function validar_email($email) {
        $emailErr = "Email correcto";
        if (empty($email)) {
            $emailErr="Se requiere email"
        }else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr="Formato de email incorrecto";
            }
        }
        return $emailErr;
    }
?>