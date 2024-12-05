<?php
    session_start();
    $oculta='boca_abajo';
    $cartas=['copas_02.jpg','copas_03.jpg','copas_05.jpg','copas_02.jpg','copas_03.jpg','copas_05.jpg'];
    for($i=0;$i<3;$i++){
        shuffle($cartas);
    }
    $_SESSION['cartas'] = $cartas;
    $_SESSION['contCartas']=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego</title>
</head>
<body>
    <h1>Bienvenid@,<?php echo $_SESSION['login']?></h1>
    <h1>Cartas Levantadas:</h1>
</body>
</html>