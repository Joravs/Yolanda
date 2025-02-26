<?php
    require_once 'ctdb.php';

    $stats1=$conn->prepare('SELECT SUM(glucosa1+glucosa2),
          (select glucosa from hipo where hipo.idUsuario=comidas.idUsuario AND hipo.fecha=comidas.fecha),
           (select glucosa from hiper where hiper.idUsuario=comidas.idUsuario AND hiper.fecha=comidas.fecha),tipoComida,fecha from comidas 
           where comidas.idUsuario=? and comidas.fecha=? group BY comidas.fecha, comidas.tipoComida 
          ORDER BY FIELD(comidas.tipoComida, "Desayuno","Mediodia","Comida","Merienda","Cena");');
?>