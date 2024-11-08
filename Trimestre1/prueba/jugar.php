<?php
    session_start();
    include "pintar-circulos.php";   
    if (isset($_POST['enviar'])){
        for($i=1;$i<=count($_POST)-1;$i++){
            $_SESSION['circulo'.$i]=$_POST['circulo'.$i];
        }
        $colors=["black","black","black","black"];
        pintar_circulos($colors[0],$colors[1],$colors[2],$colors[3]);
    }
?>