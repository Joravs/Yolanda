<?php
    function validar_genero(){
        if (isset($sexo) && ($_POST["sexo"]=="mujer" || $_POST["sexo"]=="hombre")){
            $genderErr="Checked";
        }else{
            $genderErr="Gender is required";
        }
        return $genderErr;
    }
?>