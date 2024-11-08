<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simon Dice</title>
</head>
<body>
    <h1>Adivinar una combiacion de 4 color: </h1>
    <?php
        $colors=["red", "blue", "green", "yellow"];
        function cambiarColor($btn){ 
            $color="black";
            return $color;
        }
        for($i=0;$i<4;$i++){
            $_SESSION['color'.$i] = $_POST['color'.$i];
            echo "<fieldset style='border: none;'>";
            echo '<p id="id'.$i.'" style="height:100px; border-radius: 50%; width: 100px; background-color:'. cambiarColor("id".$i).'"></p>';
            for($j=0;$j<count($colors);$j++){
                echo '<button name="boton'.$i.'" value="'.$colors[$j].'">'.$colors[$j].'</button>';
            }
            echo "</fieldset>";
            echo '<br>';
        }
    ?>
    <form action="verificar.php" method="post">
        <input type="submit" value="Comprobar">
    </form>
</body>
</html>