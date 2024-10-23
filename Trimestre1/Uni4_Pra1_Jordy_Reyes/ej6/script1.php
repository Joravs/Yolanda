<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <form method="get">
        <label for="caja">Numero de Elementos: </label>
        <input type="text" id="caja" name="caja">
        <input type="button" value="Aceptar">
    </form>
    <form method="post">
        <?php
        if (isset($_GET[1])){
            for ($i=1;$i<=count($_GET);$i++){
                echo<<<_END
                    <label for=$i>$i</label>
                    _END;
                    echo '<input type="number" name="'. $_GET[$i] .'"></input>';
            }
            echo '<input type="button" value="Enviar">';
        }
        ?>
    </form>
    <div>
        <?php
            if (isset($_POST['1'])){
                $sum=0;
                echo "El vector tiene ". count($_POST). " elementos <br>";
                for ($i=0; $i<=(count($_POST) - 1); $i++) {
                    echo $i . " = " . $_POST[$i];
                    $sum+=$_POST[$i];
                    echo "<br>";
                }
                echo "La suma es: ".$sum;
            }
        ?>
    </div>
</body>
</html>