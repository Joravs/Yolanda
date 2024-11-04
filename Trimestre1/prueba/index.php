<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simon Dice</title>
</head>
<body>
    <form action="adivina.php" method='post'>
    Generar una combiacion de 1 color: <br>
    <?php
        $colors = ["red", "blue", "green", "yellow"];
        $color = $colors[array_rand($colors)];
        echo<<<_END
            <button style="height:100px; border-radius: 50%; width: 100px; background-color: $color;" name="color"></button>
        _END;
    ?>
    <input type="submit" value="Jugar">
    </form>
</body>
</html>