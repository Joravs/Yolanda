<?php
    function test_entrada($valor){
        $valor=trim($valor);// Elimina espacios del principio y final del valor
        $valor=stripslashes($valor);// Elimina barras del valor
        return $valor;
    }
    $valor=" Es tu nombre O\'reilly? ";
    echo test_entrada($valor);
?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>"><!--Devuelve la misma url de la pagina-->

