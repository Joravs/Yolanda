<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>Registro</h1>
    <form action="prueba.php" method="post">
        <label for="usuario">Usuario: </label>
        <input type="text" name="usuario" id="usuario">
        <label for="password">Contraseña: </label>
        <input type="password" name="password" id="password" required>
        <label for="password2">Repite a contraseña: </label>
        <input type="password" name="password2" id="password2" required>
        <p>Rol</p>
        <input type="radio" name="rol" value="prime"> Prime</input>
        <input type="radio" name="rol" value="estandar">Estandar</input>
        <input type="submit" value="Registrarse" name="registro">
</body>
</html>