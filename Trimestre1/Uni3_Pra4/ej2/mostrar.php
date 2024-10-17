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
    
    echo "<h3>Ejercicio 4</h3>";

    $coche=new Coche(0,5,"verde",1400);
    $coche->aniadir_personas(65);
    $coche->aniadir_personas(65);

    echo "<br>".$coche->_toString();

    $coche->repintar("rojo");
    $coche->aniadir_cadenas_nieve(2);
    echo "<br>Color: " . $coche->getColor(). ", Numero de Cadenas: ". $coche->getNumero_cadenas_nieve() . "<br>";
    //Dos Ruedas
    $dos_ruedas=new Dos_ruedas(125,"negro",120);
    $dos_ruedas->aniadir_personas(80);
    $dos_ruedas->poner_Gasolina(20);
    echo "<br>Color: " . $dos_ruedas->getColor(). ", Peso: ". $dos_ruedas->getPeso() ."kg";
    //Camion
    $camion=new Camion()
?>