<?php
    function test_entrada(){
        if (empty($_POST["name"])) {
            $nameErr = "El nombre es obligatorio";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                $nameErr = "Únicamente se permiten letras y espacios";
            }
        }
    }
?>