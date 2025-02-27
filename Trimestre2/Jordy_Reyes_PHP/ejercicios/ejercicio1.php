<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pictograma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    <style>
        img{
            width: 200px;
            height: auto;
        }
        table,td{
            border:1px solid #000;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
<?php
    require_once '../BBDD/ctdb.php';
    $slct = $conn -> prepare ('SELECT imagen from imagenes');
    $slct-> execute();
    $slct->bind_result($img);

    echo '<table>';
    $saltoLinea=0;
    while($slct->fetch()){
        if($saltoLinea==0){
            echo '<tr>';
        }
        $saltoLinea++;
        echo "<td>
                <div><img src='../{$img}'></div>
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