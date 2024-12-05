<?php
    session_start();
    for($i=0;$i<6;$i++){
        $_SESSION['cartasOcultas'][$i]='boca_abajo.jpg';
    }
    $index=$_POST['levantar'];
    $_SESSION['contCartas']++;
    echo$_SESSION['cartasOcultas'][$index]=$_SESSION['cartas'][$index];
    header('Location: mostrarcartas.php');
    exit;
?>