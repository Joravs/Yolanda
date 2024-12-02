<?php
    session_start();
    function juegoPulsar(){
        require_once 'pintar-circulos.php';
        if(!isset($_POST['comprobar'])){
            $_SESSION['cont']=0;
            for($i=0;$i<count($colores);$i++){
                $_SESSION['coloresPulsados'][$i]=$colorBlack;
            }
            pintar_circulos($_SESSION['coloresPulsados']);
        }else{
            pintar_circulos($_SESSION['coloresPulsados']);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugar</title>
</head>
<body>
    <h1>SIMON</h1>
    <h2><?php echo $_SESSION['usuario'];?> pulsa los botones en el orden correspondiente.</h2>
    <?php juegoPulsar();?>
    <form action="post">
        <button type="submit" name="red">Rojo</button>
        <button type="submit" name="yellow">Amarillo</button>
        <button type="submit" name="green">Verde</button>
        <button type="submit" name="blue">Azul</button>
    </form>
</body>
</html>