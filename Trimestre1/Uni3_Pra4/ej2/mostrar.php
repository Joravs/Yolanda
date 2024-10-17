<?php
    require_once "Vehiculo.php";
    require_once "Cuatro_ruedas.php";
    require_once "Dos_ruedas.php";
    require_once "Camion.php";
    require_once "Coche.php";

    echo "<h3>Ejercicio 3</h3>";
    /**$vehiculo= new Vehiculo("negro",1500);

    echo $vehiculo->_toString();
    $vehiculo->circular();
    $vehiculo->aniadir_personas(70);
    echo "<br>".$vehiculo->_toString();*/
    
    echo "<h3>Ejercicio 4</h3>";

    $coche=new Coche(0,5,"verde",1400);
    $coche->aniadir_personas(65);
    $coche->aniadir_personas(65);

    echo "<br>El color del coche es: " . $coche->getColor(). "<br>El nuevo peso del coche es: ". $coche->getPeso() . "<br>";
    $coche->repintar("rojo");
    $coche->aniadir_cadenas_nieve(2);
    echo "El color del coche es: " . $coche->getColor(). "<br>El numero de cadenas para la nieve del coche es: ". $coche->getNumero_cadenas_nieve() . "<br>";
    //Dos Ruedas
    $dos_ruedas=new Dos_ruedas(125,"negro",120);
    $dos_ruedas->aniadir_personas(80);
    $dos_ruedas->poner_Gasolina(20);
    echo "<br>El color del dos ruedas es: " . $dos_ruedas->getColor(). "<br>El peso del dos ruedas es: ". $dos_ruedas->getPeso() ."kg<br>";
    //Camion
    $camion=new Camion(10,2,"azul",10000);
    $camion->aniadir_remolque(5);
    $camion->aniadir_personas(80);
    echo "<br>El color del camion es: " . $camion->getColor(). "<br>El peso del camion es: ". $camion->getPeso() . "<br>La longitud del camion es: ". $camion->getLongitud()."<br>El numero de puertas del camion es: ".$camion->getNumeroPuertas();

    echo "<h3>Ejercicio 5</h3>";

    $ej5dosruedas= new Dos_ruedas(125,"rojo",150);
    $ej5dosruedas->aniadir_personas(70);
    echo "<br>".$ej5dosruedas->getPeso()."<br>";
    $ej5dosruedas->setColor("Verde");
    $ej5dosruedas->setCilindrada(1000);
    $ej5dosruedas->ver_atributo($ej5dosruedas);
    //Camion blanco
    $ej5camion=new Camion(100,2,"blanco",6000);
    $ej5camion->aniadir_personas(84);
    $ej5camion->repintar("azul");
    $ej5camion->setNumeroPuertas(2);
    ver_atributo($ej5camion);
?>