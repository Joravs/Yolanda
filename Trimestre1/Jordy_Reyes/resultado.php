<?php
session_start();
    require_once 'db.php';
    $fecha=date('Y-m-d',time());
    $hora=date('h:i:s',time());
    $qryInsert="insert into respuestas(fecha,login,hora,respuesta) values('$fecha','{$_SESSION['uName']}','$hora','{$_POST['respuesta']}')";
    $ctdb->query($qryInsert);
    

    $qryAciertos="select login,hora from respuestas,solucion where respuesta=(select solucion from solucion where fecha='{$fecha}') group by login";
    $result=$ctdb->query($qryAciertos);
    $rows=$result->num_rows;
    $qryFallos="select login,hora from respuestas,solucion where respuesta!=(select solucion from solucion where fecha='{$fecha}') and respuestas.fecha='{$fecha}' group by login";
    $resultFa=$ctdb->query($qryFallos);
    $rows2=$resultFa->num_rows;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Evaluable</title>
</head>
<body>
    <h1>Fecha: <?php echo $fecha;?></h1>
    <h2>Jugadores acertantes: <?php echo $rows?></h2>
    <table>
        <tr>
            <th>Login</th>
            <th>Hora</th>
        </tr>
    <?php 
        for($i=0;$i<$rows;$i++){
            $result->data_seek($i);
            $row=$result->fetch_assoc();
            echo "<tr>";
            echo "<td>{$row['login']}</td>";
            echo "<td>{$row['hora']}</td>";
            echo "</tr>";
        }
    ?>
    </table>
    <h2>Jugadores que han fallado</h2>
    <table>
        <tr>
            <th>Login</th>
            <th>Hora</th>
        </tr>
    <?php 
        for($i=0;$i<$rows2;$i++){
            $resultFa->data_seek($i);
            $row=$resultFa->fetch_assoc();
            echo "<tr>";
            echo "<td>{$row['login']}</td>";
            echo "<td>{$row['hora']}</td>";
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>