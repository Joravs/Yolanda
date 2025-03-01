<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
    <style>
        table {
            border-collapse: collapse;
            border:1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
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
    if (isset($_POST['mes'])) {
        $diafinal=mktime(0,0,0,(int)$_POST['mes']+1,0,(int)$_POST['anio']);
        $diainicial=mktime(0,0,0,(int)$_POST['mes'],1,(int)$_POST['anio']);
        echo<<<_END
        <br>
        <br>
        <br>
            <table>
                <tr>
                    <th class="nombre" colspan="7">Calendario</th>
                </tr>
                 <tr>
                    <th>Lunes</th>
                    <th>Martes</th>
                    <th>Miércoles</th>
                    <th>Jueves</th>
                    <th>Viernes</th>
                    <th>Sábado</th>
                    <th>Domingo</th>
                </tr>
        _END;
        $inicio=date("N",$diainicial); // Dia de la semana en la que empieza el mes, formato numero
        $final=date("j",$diafinal); // Dia final del mes, formato numero
        $k=1; // saltar espacios de dias
        $num=0; // dias que se imprimiran
        for($i=1;$i<=$final;$i++){
            echo "<tr>";
            for($j=1;$j<=7;$j++){
                while ($k<$inicio){
                    echo "<td></td>";
                    $k++;
                    $j++;
                }
                $num=$j+$i-$k;
                if ($num<=$final){
                    echo "<td>".$num."</td>";
                }else{
                    $j=7;
                }
            }
            $k=1;
            $inicio=-1;
            echo "</tr>";
            $i=$num;
        }
        echo "</table>";
    }
?>