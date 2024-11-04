<?php session_start() ?>
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
        $_SESSION['color'] = $_POST['color'];
        $colors = ["red", "blue", "green", "yellow"];
        $color="black";
        echo<<<_END
            <button style="height:100px; border-radius: 50%; width: 100px; background-color: $color;"></button>
            <p>Escoge un color: </p>
            <select name="color">
            <option value="red">Red</option>
            <option value="blue">Blue</option>
            <option value="green">Green</option>
            <option value="yellow">Yellow</option>
            
        _END;
    ?>
    <input type="submit" value="Comprobar">
    </form>
</body>
</html>