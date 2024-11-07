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
        <?php
            function cambiarColor($btn){
                $color='black';
                $dom = new DOMDocument();
                @$dom->loadHTML($html);
                $xpath = new DOMXPath($dom);
                $elements = $xpath->query($btn);
                
                if (($elements->length) > 0) {
                    return $elements->item(0)->nodeValue;
                } else {
                    return $color;
                }
                return $color;
            }
            $color="black";
            for($i=0;$i<4;$i++){
                $_SESSION['color'.$i] = $_POST['color'.$i];
                echo '<p id="id" style="height:100px; border-radius: 50%; width: 100px; background-color: black;"></p>';
                for($j=0;$j<count($colors);$j++){
                    echo '<button onclick="'. cambiarColor("p.id".$i).'"type="button" id="boton'.$j.'" value="'.$colors[$j].'">'.$colors[$j].'</button>';
                }
                echo '<br>';
            }
        ?>
        <input type="submit" value="Comprobar">
    </form>
</body>
</html>