<?php
    function validar_genero(){
        $genderErr=null;
        if (empty($_POST["sexo"])){
            $genderErr="* Gender is required";
        }
        return $genderErr;
    }
?>