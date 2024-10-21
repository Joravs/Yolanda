<?php
    if (isset($_POST['mes'])) {
        $fecha=mktime(0,0,0,(int)$_POST['mes'],0,(int)$_POST['anio']);
        echo<<<_END
            <table>
                <tr>
                    <th style="justify-content:center;">Calendario</th>
                </tr>
                 <tr>
                    <th>Domingo</th>
                    <th>Lunes</th>
                    <th>Martes</th>
                    <th>Miércoles</th>
                    <th>Jueves</th>
                    <th>Viernes</th>
                    <th>Sábado</th>
                </tr>
        _END;
        $dia=date('j',$fecha);
        for($i=0;$i<$dia;$i++){
            echo "<tr>";
            for($j=0;$j<7;$j++){
                $num=$j+$i+1;
                echo "<td>".$num."</td>";
            };
            $i+=$num;
            echo "</tr>";
        };
        echo "</table>";
    }else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
</head>
<body>
    <form action="#" method="post">
        <label for="mes">Introduce un mes</label>
        <input type="number" name="mes" id="mes">
        <label for="anio">Introduce un anio</label>
        <input type="number" name="anio" id="anio">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
<?php
    }
?>