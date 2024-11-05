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
    <?php
        for($i=1;$i<=4;$i++){
            $_SESSION['color'.$i] = $_POST['color'.$i];
        }
        $colors = ["red", "blue", "green", "yellow"];
        $color="black";
        echo<<<_END
            <button style="height:100px; border-radius: 50%; width: 100px; background-color: $color;"></button>
            <p>Escoge un color: </p>
            <input onclick="changeColor()" value="red">Red</input>
            <input value="blue">Blue</input>
            <input value="green">Green</input>
            <input value="yellow">Yellow</input>
        _END;
        function changeColor() {
            $color = $_POST['color'];
        }
    ?>
    <input type="submit" value="Comprobar">
    </form>
</body>
</html>