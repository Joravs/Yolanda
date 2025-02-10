<?php
    require_once "persona.php";

    //Creamos el objeto.
    $persona = new Persona();
    //Seteamos las propiedades.
    $persona->nombre = 'Fernando';
    $persona->apellido = 'Gaitan';
    $persona->edad = 26;
    //Mostramos el resultado de las propiedades.
    echo $persona->saludar();
?>