<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <style>
        div{
            display: inline-block;
        }
    </style>
</head>
<body>
    <form action="" method="post">∫
        <label for="dimen">Dimension de la Matriz: </label>
        <input type="number" name="dimen" id="dimen">
        <input type="submit" value="Enviar" name="Enviar">
    </form>
    <?php
        if (isset($_POST['Enviar'])){
            echo "<form>";
            for($i=0;$i<$_POST['dimen'];$i++){
                for($j=0;$j<$_POST['dimen'];$j++){
                    echo "<div>";
                    echo '<label for="'.$i.$j.'">('.$i.$j.')</label><br>';
                    echo '<input type="number" name="'.$i.$j.'" id="'.$i.$j.'">';
                    echo "</div>";
                }
                echo '<br>';
            }
            echo '<input type="submit" value="calcular">';
            echo '</form>';
        }
    ?>
    <?php
        function sumardiag($arr){
            $suma=0;
            foreach ($arr as $value) {
                $suma+=$value;
            }
            return $suma;
        }
        var_dump($_POST);
        if (isset($_POST['00'])) {
            for ($i=0; $i <sqrt(count($_POST)); $i++) { 
                for ($j=0; $j < sqrt(count($_POST)); $j++) { 
                    $matriz[$i][$j]=$_POST[$i.$j];
                }
            }
            $diagonal=array();
            for ($i=0; $i < count($matriz); $i++) { 
                echo "La diagonal mayor es: ".$matriz[$i][$i]." ";
                $diagonal[$i]=$matriz[$i][$i];
            }
            echo "La suma de la diagonal mayor es: ".sumardiag($diagonal);

            for ($i=0; $i < count($matriz); $i++) { 
                echo "La diagonal menor es: ".$matriz[count($matriz)-$i-1][$i]." ";
                $diagonal[$i]=$matriz[$i][$i];
            }
            echo "La suma de la diagonal menor es: ".sumardiag($diagonal);
        }
    ?>
</body>
</html>