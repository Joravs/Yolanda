<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
    <?php
    require_once './ctdb.php';

    $slct = $conn -> prepare ('SELECT imagen from imagenes');
    $slct-> execute();
    $slct->get_result();
    $slct->store_result();

    if($slct->num_rows > 0) {
        $rows=$slct->num_rows;
        echo '<table>';
        $saltoLinea=0;
        for($i=0;$i<$rows;$i++){
            $slct->data_seek($i);
            if($saltoLinea<3){
                echo '<tr>';
            }
            $saltoLinea++;
            $img=$slct->fetch_assocc();
            echo "<td>
                    <div class='row'><img src'{$img[$i]}'></div>
                    <div class='row'>{$img[$i]}</div>
                  </td>";
            if($saltoLinea==4){
                $saltoLinea=0;
                echo '</tr>';
            }
        }
        echo '</table>';
    }else{
        echo '<div>No se encontraron Imagenes</div>';
    }
?>
    </div>    
</body>
</html>