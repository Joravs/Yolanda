<?php
    function validar_genero(){
        if (empty($_POST["sexo"])){
            $genderErr="Gender is required";
        }
        return $genderErr;
    }
?>