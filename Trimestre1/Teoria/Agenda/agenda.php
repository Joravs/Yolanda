<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>
    <h1>Hola <?php $_SESSION['usuario']?></h1>
    <?php
        for($i=0;$i<$_SESSION['cont'];$i++){
    ?>
    <form action="" method="post">
        <legend>Contacto $_SESSION['cont']</legend>
    </form>
    <?php
        }
    ?>
</body>
</html>