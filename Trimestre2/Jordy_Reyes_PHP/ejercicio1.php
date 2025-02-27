<?php
    require_once './ctdb.php';

    $slct = $conn -> prepare ('SELECT imagen from imagenes');
    $slct-> execute();
    $slct->store_result();

    if($slct->num_rows > 0) {
?>

<?php
    }else{
        echo '<div>No se encontraron Imagenes</div>';
    }
?>