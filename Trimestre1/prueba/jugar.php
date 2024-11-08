<?php
    session_start();
    include "pintar-circulos.php";
    if (isset($_POST['enviar'])){
        $_SESSION['contador'] =1;
        $color="black";
        for($i=1;$i<=count($_POST)-1;$i++){
            $_SESSION['circulo'.$i]=$_POST['circulo'.$i];
            $_SESSION['resp'.$i]=$color;
        }
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
        <h1>Adivina</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<?php
            pintar_circulos($color,$color,$color,$color);
        }else{
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
        <h1>Adivina</h1>
        <form action="<?php if($_SESSION['contador']==4){echo "acierto.php"}else{echo $_SERVER['PHP_SELF']}?>" method="post">
<?php              
            $_SESSION['resp'.$_SESSION['contador']]=$_POST['color'];
            pintar_circulos($_SESSION['resp1'],$_SESSION['resp2'],$_SESSION['resp3'],$_SESSION['resp4']);    
            $_SESSION['contador']++;
        }

?>
        <button type="submit" name="color" value="red" style="background-color: red">Rojo</button>
        <button type="submit" name="color" value="yellow" style="background-color: yellow">Amarillo</button>
        <button type="submit" name="color" value="green" style="background-color: green">Verde</button>
        <button type="submit" name="color" value="blue" style="background-color: blue">Azul</button>
    </form>
</body>
</html>