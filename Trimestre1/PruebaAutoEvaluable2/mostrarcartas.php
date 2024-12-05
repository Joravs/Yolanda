<?php
    session_start();
    if(!isset($_SESSION['contCartas'])){
        $oculta=['boca_abajo.jpg','boca_abajo.jpg','boca_abajo.jpg','boca_abajo.jpg','boca_abajo.jpg','boca_abajo.jpg'];
        $cartas=['copas_02.jpg','copas_03.jpg','copas_05.jpg','copas_02.jpg','copas_03.jpg','copas_05.jpg'];
        for($i=0;$i<3;$i++){
            shuffle($cartas);
        }
        $_SESSION['cartas'] = $cartas;
        $_SESSION['contCartas']=0;
        $_SESSION['cartasOcultas']=$oculta;
    }
    $oculta=$_SESSION['cartasOcultas'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego</title>
    <style>
        img{
            aspect_ratio:13/20;
            width:150px;
            height:245px;
            margin:0px 5px;
        }
        h2{
            display: inline;
        }
    </style>
</head>
<body>
    <h1>Bienvenid@,<?php echo $_SESSION['login']?></h1>
    <h1>Cartas Levantadas: <?php echo $_SESSION['contCartas']?></h1>
    <form action="" method="post">
        <h2>Pareja: </h2>
        <input type="number" name="num1" id="num1">
        <input type="number" name="num2" id="num2">
        <input type="submit" value="Comprobar" name='comprobar'>
    </form>
    <?php
        for($i=0;$i<count($oculta);$i++){
            echo "<img src='img/{$oculta[$i]}'>";
        }
    ?>
</body>
</html>