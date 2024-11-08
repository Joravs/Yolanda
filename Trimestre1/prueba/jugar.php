<?php
    session_start();
    require_once "pintar-circulos.php";
    if (isset($_POST['enviar'])){
        for($i=1;$i<=count($_POST)-1;$i++){
            $_SESSION['circulo'.$i]=$_POST['circulo'.$i];
        }
        pintarCirculos();
    }
?>