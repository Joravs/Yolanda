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
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
    </form>
</body>
</html>