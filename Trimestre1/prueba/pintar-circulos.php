<?php
    function pintar_cirulos($c1,$c2,$c3,$c4){
        echo '<button class="circulo" disabled="disabled" style="background-color:'.$c1.';"></button>';
        echo '<button class="circulo" disabled="disabled" style="background-color:'.$c2.';"></button>';
        echo '<button class="circulo" disabled="disabled" style="background-color:'.$c3.';"></button>';
        echo '<button class="circulo" disabled="disabled" style="background-color:'.$c4.';"></button>';
    }
?>
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
            $colors=["red","green","blue","yellow"];
            pintar_cirulos($colors[array_rand($colors)],$colors[array_rand($colors)],$colors[array_rand($colors)],$colors[array_rand($colors)]);
        ?>
        <input type="submit" value="Vamos a Jugar" name='enviar'>
    </form>
</body>
</html>