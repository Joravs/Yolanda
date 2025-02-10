<?php
    if (isset($_POST['1'])){
        $sum=0;
        echo "El vector tiene ". count($_POST). " elementos <br>";
        for ($i=1; $i<=count($_POST); $i++) {
            echo $i . " = " . $_POST[$i];
            $sum+=$_POST[$i];
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
    <title>Ejercicio 6</title>
</head>
<body>
    <form method="get">
        <br>
        <br>
        <label for="caja">Numero de Elementos: </label>
        <input type="text" id="caja" name="caja">
        <input type="submit" value="Aceptar">
        <br>
        <br>
    </form>
    <?php
    if (isset($_GET['caja'])){
        echo '<form method="post">';
        for ($i=1;$i<=$_GET['caja'];$i++){
            echo<<<_END
                <label for=$i>$i</label>
                _END;
                echo '<input type="number" name="'.$i.'"></input>';
                echo "<br>";
        }
        echo '<input type="submit" value="Enviar">';
        echo "</form>";
    }
    ?>
</body>
</html>