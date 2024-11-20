<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST-GET</title>
</head>
<body>
    <h1>Operar</h1>
    <form action="#" name="form" method="POST">
        <label for="num1">Numero 1</label>
        <input type="numer" name="num1" id="num1">
        <label for="num2">Numero 2</label>
        <input type="number" name="num2" id="num2">
        <input type="submit" value="Sumar">
    </form>
        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $sum = $_POST['num1'] + $_POST['num2'];
                echo "<br><br>La suma de los numeros es: " . $sum;
            }
        ?>
</body>
</html>