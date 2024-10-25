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
            for($i=0;$i<$_POST['dimen'];$i++){
                for($j=0;$j<$_POST['dimen'];$j++){
                    echo "<div>"
                    echo '<label for="'.$i$j.'">('.$i,$j.')</label><br>';
                    echo '<input type="number" name="'.$i$j.'" id="'.$i$j.'">';
                    echo "</div>"
                }
            }
            'echo <input type="submit" value="calcular">';
        }
    ?>
    <?php
        if (isset($_POST['00'])) {
            
        }
    ?>
</body>
</html>