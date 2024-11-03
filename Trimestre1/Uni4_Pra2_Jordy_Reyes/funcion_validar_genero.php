<?php
    function validar_genero(){
        $genderErr=null;
        if (isset($_POST["enviar"]) && empty($_POST["sexo"])){
            $genderErr="* Gender is required";
        }
        return $genderErr;
    }
?>