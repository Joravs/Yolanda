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
    $slct->store_result();

    if($slct->num_rows > 0) {
        $rows=$slct->num_rows;
        echo '<table>';
        $saltoLinea=0;
        echo '<tr>';
        for($i=0;$i<$rows;$i++){
            $img=$slct->fetch_assoc();
            echo '<td>
                    <div class="row"><img src"{$img[$i}"></div>
                    <div class="row">{$img[$i}</div>
                  </td>';
        }
        echo '</tr>';
        echo '</table>';
    }else{
        echo '<div>No se encontraron Imagenes</div>';
    }
?>
    </div>    
</body>
</html>