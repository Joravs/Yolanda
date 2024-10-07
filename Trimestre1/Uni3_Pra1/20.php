<?php
    $estadios_futbol=array(
        'Barcelona'=>"Camp Nou",
        'Real Madrid'=>"Santiago Bernabeu",
        'Valencia'=>"Mestalla",
        'Real Sociedad'=>"Anoeta"
    );

    echo "<table border='1'>";
        foreach($estadios_futbol as $index => $elem){
            echo "<tr><td>$index</td><td>$elem</td></tr> <br>";
        }
    echo "</table>"
?>