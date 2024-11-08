<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simon</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="jugar.php" method="post">
        <h1>Memoriza los colores</h1>
        <?php
            require_once "pintar-circulos.php";
            $colors=["red","green","blue","yellow"];
            pintar_circulos($colors[array_rand($colors)],$colors[array_rand($colors)],$colors[array_rand($colors)],$colors[array_rand($colors)]);
        ?>
        <input type="submit" value="Vamos a Jugar" name='enviar'>
    </form>
</body>
</html>