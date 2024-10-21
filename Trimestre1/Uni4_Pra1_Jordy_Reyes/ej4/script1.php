<?php
    if (isset($_POST['mes'])) {
        $diafinal=mktime(0,0,0,(int)$_POST['mes']+1,0,(int)$_POST['anio']);
        $diainicial=mktime(0,0,0,(int)$_POST['mes'],1,(int)$_POST['anio']);
        echo date("Y-m-d H:i:s",$diafinal);
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
        for($i=1;$i<=date('j',$diafinal);$i++){
            echo "<tr>";
            for($j=0;$j<7;$j++){
                $num=$j+$i;
                if ($num<$diafinal){
                    echo "<td>".$num."</td>";
                }
            };
            $i=$num;
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