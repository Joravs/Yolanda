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
            $colors=["red", "blue", "green", "yellow"];
            function cambiarColor($btn){ 
                $color="black";
                if(isset($_GET["boton3"])){
                    $color=$_GET["boton3"];
                }
                return $color;
            }
            for($i=0;$i<4;$i++){
                $_SESSION['color'.$i] = $_POST['color'.$i];
                echo "<form method='get'>";
                echo '<p id="id'.$i.'" style="height:100px; border-radius: 50%; width: 100px; background-color:'. cambiarColor("id".$i).'"></p>';
                for($j=0;$j<count($colors);$j++){
                    echo '<button name="boton'.$i.'" value="'.$colors[$j].'">'.$colors[$j].'</button>';
                }
                echo "</form>";
                echo '<br>';
            }
        ?>
        <input type="submit" value="Comprobar">
    </form>
</body>
</html>