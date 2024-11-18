<?php  
    if(isset($_COOKIE['color'])){$style = $_COOKIE['color'];} 
    if(isset($_POST['enviar'])){ 
        setcookie("color", $_POST["color"]);
        echo "Se crea la cookie.";
        echo "<a href=".$_SERVER['PHP_SELF'].">ir a la otra web</a>";
    }else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
    <style>
        body{
            background-color: <?php echo $style ?>;
        }
    </style>
</head>
<body>
    <form method="post">
        Seleccione de que color desea que sea la web de ahora en adelante: <br><br>
        <label for="green">Verde</label>
        <input type="radio" id='green' name="color" value="green" required><br>
        <label for="rojo">Rojo</label>
        <input type="radio" id='rojo' name="color" value="red"><br>
        <label for="azul">Azul</label>
        <input type="radio" id='azul' name="color" value="blue"><br><br>
        <input type="submit" value="Crear Cookie" name="enviar">
    </form>
</body>
</html>
<?php
    }
?>