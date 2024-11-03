<?php
    function validar_nombre(){
        $nameErr=null;
        if(isset($_POST["enviar"])){
        if (empty($_POST["name"])) {
            $nameErr = "* El nombre es obligatorio";
        } else {
            if (!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])) {
                $nameErr = "* Únicamente se permiten letras y espacios";
            }
        }}
        return $nameErr;
    }
?>