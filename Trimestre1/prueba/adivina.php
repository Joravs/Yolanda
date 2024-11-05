<?php session_start(); $colors = ["red", "blue", "green", "yellow"]; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simon Dice</title>
</head>
<body>

    Generar una combiacion de 1 color: <br>
    <script>function cambiarColor(id){
        let color = document.getElementById(id);
        const boton = document.getElementByClassName('boton');
        color.style.backgroundColor = boton.value;
    }
    </script>
    <?php
        $color="black";
        for($i=0;$i<4;$i++){
            $_SESSION['color'.$i] = $_POST['color'.$i];
            echo '<button id="b'.$i.'" style="height:100px; border-radius: 50%; width: 100px; background-color:'. $color.';"></button>';
            echo '<button class="boton" onclick="cambiarColor("b'.$i.'")" value="'.$colors[$i].'">'.$colors[$i].'</button>';
        }
    ?>
    <input type="submit" value="Comprobar">

</body>
</html>