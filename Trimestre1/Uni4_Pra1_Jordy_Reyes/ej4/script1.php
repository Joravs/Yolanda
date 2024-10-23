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
    if (isset($_POST['mes'])) {
        $diafinal=mktime(0,0,0,(int)$_POST['mes']+1,0,(int)$_POST['anio']);
        $diainicial=mktime(0,0,0,(int)$_POST['mes'],1,(int)$_POST['anio']);
        echo date("Y-m-d H:i:s",$diafinal);
        echo<<<_END
            <table>
                <tr>
                    <th style="display:flex; justify-content:center;">Calendario</th>
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
        $inicio=date("N",$diainicial);
        echo $inicio;
        $k=1;
        $num=0;
        for($i=1;$i<=date('j',$diafinal);$i++){
            echo "<tr>";
            for($j=1;$j<=7;$j++){
                if($num<31){
                    while ($k<$inicio){
                        echo "<td></td>";
                        $k++;
                        $j++;
                    }
                    $num=$j+$i-$k;
                    if ($num<$diafinal){
                        echo "<td>".$num."</td>";
                    }
                }else{$j=7;}
            };
            $k=1;
            $inicio=-1;
            echo "</tr>";
            $i=$num;
        };
        echo "</table>";
    }
?>