<?php session_start();?>
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

    }
    </script>
    <?php
        $colors = ["red", "blue", "green", "yellow"];
        $color="black";
        for($i=0;$i<4;$i++){
            $_SESSION['color'.$i] = $_POST['color'.$i];
            echo '<button id="b'.$i.'" style="height:100px; border-radius: 50%; width: 100px; background-color:'. $color.';"></button>';
            echo '<button onclick="cambiarColor("b'.$i.'")">'.$colors[$i].'</button>';
        }
    ?>
    <input type="submit" value="Comprobar">
    </form>
</body>
</html>