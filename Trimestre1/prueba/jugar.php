<?php
    session_start();
    include "pintar-circulos.php";   
    if (isset($_POST['enviar'])){
        for($i=1;$i<=count($_POST)-1;$i++){
            $_SESSION['circulo'.$i]=$_POST['circulo'.$i];
        }
        $colors=["black","black","black","black"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="acierto.php" method="post">
        <?php
            pintar_circulos($colors[0],$colors[1],$colors[2],$colors[3]);
        }
        ?>
        <input type="button" value="red">
        <input type="button" value="amarillo">
        <input type="button" value="verde">
        <input type="button" value="azul">
    </form>
</body>
</html>