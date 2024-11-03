<?php require_once "funcion_validar_nombre.php";
require_once "funcion_validar_email.php"; require_once "funcion_validar_url.php"; require_once "funcion_validar_genero.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidad 4 Practica 2</title>
    <style>
        span.error{
            color: red;
        }
    </style>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" autocomplete="off">
        <h1>PHP Form Validator Example</h1>
        <span class="error"><?php if(empty($_POST["enviar"])) echo "required field"?></span><br><br>
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" value="<?php if (isset($_POST['name']))?>>"><span class="error"><?php echo validar_nombre()?></span><br><br>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value=""><span class="error"><?php echo validar_email()?></span><br><br>
        <label for="url">URL:</label>
        <input type="text" name="url" id="url" value=""><span class="error"><?php echo validar_url()?></span><br><br>
        <label for="comentario">Comentario</label>
        <input type="text" name="comentario" id="comentario"><br><br>
        <label for="sexo">Gender:</label>
        <input type="radio" name="sexo" value="mujer"> Mujer
        <input type="radio" name="sexo" value="hombre"> Hombre
        <span class="error">* <?php echo validar_genero()?></span><br><br>
        
        <input type="submit" value="Enviar" name="enviar">
    </form>
    <?php
        if (isset($_POST['enviar'])){
            echo "Nombre: ".$_POST['name']."<br>";
            echo "Email: ".$_POST['email']."<br>";
            echo "URL: ".$_POST['url']."<br>";
            echo "Comentario: ".$_POST['comentario']."<br>";
            echo "Sexo: ".$_POST['sexo']."<br>";
        }
    ?>
</body>
</html>