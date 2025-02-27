<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pictograma</title>
    <style>
        img{
            width: 300px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
    <?php
    require_once './ctdb.php';

    $slct = $conn -> prepare ('SELECT imagen from imagenes');
    $slct-> execute();
    $slct->bind_result($img);

    echo '<table>';
    $saltoLinea=0;
    while($slct->fetch()){
        if($saltoLinea<3){
            echo '<tr>';
        }
        $saltoLinea++;
        echo "<td>
                <div><img src='{$img}'></div>
                <div>{$img}</div>
              </td>";
        if($saltoLinea==4){
            $saltoLinea=0;
            echo '</tr>';
        }
    }
    echo '</table>';
?>
    </div>    
</body>
</html>