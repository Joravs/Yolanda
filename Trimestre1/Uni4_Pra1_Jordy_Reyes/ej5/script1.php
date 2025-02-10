<?php
    if (isset($_POST['num0'])){
        $sum=0;
        echo "El vector tiene ". count($_POST). " elementos <br>";
        for ($i=0; $i<=(count($_POST) - 1); $i++) {
            echo $i . " = " . $_POST['num'.$i];
            $sum+=$_POST['num'.$i];
            echo "<br>";
        }
        echo "La suma es: ".$sum;
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
                <label for="num$i">$i</label>
                <input type="number" id="num$i" name="num$i"><br>
            _END;
        }
        echo '<input type="submit" value="Submit">';
    ?>
    </form>
</body>
</html>