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
        for($i=0;$i<$rows;$i++){
            $img=$slct->fetch_assoc();

        }
?>
<?php
    }else{
        echo '<div>No se encontraron Imagenes</div>';
    }
?>
    </div>    
</body>
</html>