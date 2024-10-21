<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <form action="formulariodinamico.php" method="get">
    <?php
        for ($i = 0; $i <9; $i++){
            echo<<<_END
                <label for="num'.$i.'">Num $i</label>
                <input type="number" id="num'.$i.'" name="'.$i.'"><br>
            _END;
        }
        echo '<input type="submit" value="Submit">';
    ?>
    </form>
</body>
</html>