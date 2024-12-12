<?php
    require_once 'db.php';

    $qryPuntos="SELECT login, puntos from jugador";
    $result=$ctdb->query($qryPuntos);
    $rows=$result->num_rows;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Evaluable</title>
    <style>
        div{
            background-color: blue;
        }
    </style>
</head>
<body>
    <h1>Puntos por Jugador</h1>
    <table>
        <tr>
            <th>Login</th>
            <th>Puntos</th>
            <th></th>
        </tr>
        <?php 
            for($i=0;$i<$rows;$i++){
                $result->data_seek($i);
                $row=$result->fetch_assoc();
                echo "<tr>";
                echo "<td>{$row['login']}</td>";
                echo "<td>{$row['puntos']}</td>";
                echo "<td><div width='{$row['puntos']}px' height=2px></div></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>