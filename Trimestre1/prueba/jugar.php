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
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <?php
            pintar_circulos($color,$color,$color,$color);
        }
        ?>
        <?php
            $color="black";
            $i=1;
            if(isset($_GET["color"])){
                $_SESSION['resp'.$i]=$_GET['color'.$i];
                $i++;
                pintar_circulos($_SESSION['resp1'],$_SESSION['resp2'],$_SESSION['resp3'],$_SESSION['resp4']);
        }
        ?>
        <input type="hidden" name="color" value="black">
        <input type="submit" name="color1" value="red" style="background-color: red">
        <input type="submit" name="color2" value="yellow" style="background-color: yellow">
        <input type="submit" name="color3" value="green" style="background-color: green">
        <input type="submit" name="color4" value="blue" style="background-color: blue">
    </form>
</body>
</html>