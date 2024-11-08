<?php
    session_start();
    include "pintar-circulos.php";   
    if (isset($_POST['enviar'])){
        for($i=1;$i<=count($_POST)-1;$i++){
            $_SESSION['circulo'.$i]=$_POST['circulo'.$i];
        }
        $color="black";
        ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jugar</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <?php
            pintar_circulos($color,$color,$color,$color);
        }else{
                
        }
        ?>
        <button type="submit" name="color1" value="red" style="background-color: red">Rojo</button>
        <button type="submit" name="color2" value="yellow" style="background-color: yellow">Amarillo</button>
        <button type="submit" name="color3" value="green" style="background-color: green">Verde</button>
        <button type="submit" name="color4" value="blue" style="background-color: blue">Azul</button>
    </form>
</body>
</html>