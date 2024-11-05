<?php session_start(); $colors = ["red", "blue", "green", "yellow"]; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simon Dice</title>
</head>
<body>
    <form action="verificar.php" method='post'>
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
                for($j=0;$j<count($colors);$j++){
                    echo '<button type="button" class="boton" onclick="cambiarColor("b'.$j.'")" value="'.$colors[$j].'">'.$colors[$j].'</button>';
                }
                echo '<br>';
            }
        ?>
        <input type="submit" value="Comprobar">
    </form>
</body>
</html>