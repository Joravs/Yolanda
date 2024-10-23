<?php
var_dump($_POST);
    if (isset($_POST['num0'])){
        echo "El vector tiene ". count($_POST) - 1 . " elementos";
        for ($i=0; $i<(count($_POST) - 1); $i++) {
            echo $i . " = " . $_POST['num'.$i];
            echo "<br>";
        }
        var_dump($_POST);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <form action="#" method="post">
    <?php
        for ($i = 0; $i <9; $i++){
            echo<<<_END
                <label for="num$i">Num $i</label>
                <input type="number" id="num$i" name="num$i"><br>
            _END;
        }
        echo '<input type="submit" value="Submit">';
    ?>
    </form>
</body>
</html>