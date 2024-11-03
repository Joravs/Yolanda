<?php
    function validar_email() {
        $emailErr=null;
        if (empty($_POST['email'])) {
            $emailErr="* Se requiere email";
        }else {
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $emailErr="* Formato de email incorrecto";
            }
        }
        return $emailErr;
    }
?>