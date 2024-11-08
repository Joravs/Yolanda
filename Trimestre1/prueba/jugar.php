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
            if(isset($_GET["color"])){
                for($i=1;$i<=4;$i++){
                $_SESSION['resp'.$i]=$_GET['color'];
                pintar_circulos($_SESSION['resp1'],$_SESSION['resp2'],$_SESSION['resp3'],$_SESSION['resp4']);
            }
        }
        ?>
        <input type="submit" name="color" value="red" style="background-color: red">
        <input type="submit" name="color" value="yellow" style="background-color: yellow">
        <input type="submit" name="color" value="green" style="background-color: green">
        <input type="submit" name="color" value="blue" style="background-color: blue">
    </form>
</body>
</html>