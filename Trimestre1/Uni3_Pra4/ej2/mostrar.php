<?php
    require_once "Vehiculo.php";
    require_once "Cuatro_ruedas.php";
    require_once "Dos_ruedas.php";
    require_once "Camion.php";
    require_once "Coche.php";

    echo "<h3>Ejercicio 3</h3>";
    $vehiculo= new Vehiculo("negro",1500);

    echo $vehiculo->_toString();
    $vehiculo->circular();
    $vehiculo->aniadir_personas(70);
    echo "<br>".$vehiculo->_toString();
    
<<<<<<< HEAD
    echo "<h3>Ejercicio 4</h3>";

    $cuatro_ruedas= new Cuatro_ruedas(4,"negro",1000);
    $cuatro_ruedas->repintar("Rojo");
    echo "<br>".$cuatro_ruedas->_toString();
    
=======
    (Cuatro_ruedas)->$vehiculo->repintar("Rojo");
    echo "<br>".$vehiculo->_toString();
>>>>>>> 43b725fb3d3b429c4328bfe374aeb585470e33d9
?>