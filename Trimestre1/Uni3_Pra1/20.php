<?php
    $estadios_futbol=array(
        'Barcelona'=>"Camp Nou",
        'Real Madrid'=>"Santiago Bernabeu",
        'Valencia'=>"Mestalla",
        'Real Sociedad'=>"Anoeta"
    );

    //A)
    echo "<table border='1'>";
        foreach($estadios_futbol as $index => $elem){
            echo "<tr><td>$index</td><td>$elem</td></tr> <br>";
        }
    echo "</table>";

    //B)
    //$estadios_futbol['Real Madrid']="";

    //C)
    echo "<table border='1'>";
        foreach($estadios_futbol as $index => $elem){
            echo "<tr><td>$index</td><td>$elem</td></tr> <br>";
        }
    echo "</table>";
?>