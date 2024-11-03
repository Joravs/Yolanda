<?php require_once "funcion_validar_nombre.php" && "funcion_validar_email.php" && "funcion_validar_url.php" && "funcion_validar_genero.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidad 4 Practica 2</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" value=""><span class="error">* <?php validar_nombre()?></span><br><br>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value=""><span class="error">* <?php validar_email()?></span><br><br>
        <label for="sexo">Gender:</label>
        <input type="radio" name="sexo" value="mujer"> Mujer
        <input type="radio" name="sexo" value="hombre"> Hombre
        <span class="error">* <?php validar_genero()?></span><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>