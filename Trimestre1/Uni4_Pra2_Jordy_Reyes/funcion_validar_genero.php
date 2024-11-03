<?php
    function validar_genero(){
        $genderErr="";
        if (empty($_POST["sexo"])){
            $genderErr="Gender is required";
        }
        return $genderErr;
    }
?>