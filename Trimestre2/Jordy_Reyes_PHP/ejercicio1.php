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
    $slct->bind_result($img);

    if($slct->num_rows > 0) {
        echo '<table>';
        $saltoLinea=0;
        while($slct->fetch()){
            if($saltoLinea<3){
                echo '<tr>';
            }
            $saltoLinea++;
            echo "<td>
                    <div class='row'><img src'{$img}'></div>
                    <div class='row'>{$img}</div>
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