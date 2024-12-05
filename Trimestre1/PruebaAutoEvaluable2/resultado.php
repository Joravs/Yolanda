<?php
    session_start();
    $index1=$_POST['num1']-1;
    $index2=$_POST['num2']-1;
    $carta1=$_SESSION['cartas'][$index1];
    $carta2=$_SESSION['cartas'][$index2];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Bienvenid@,<?php echo $_SESSION['login']?></h1>
    <?php 
        if($carta1==$carta2){
    ?>
    <h1>Acierto posiciones <?php echo $index1." y ".$index2;?> despues de <?php echo $_SESSION['contCartas']?> intentos</h1>
    <h3>Se le sumara 1 punto, asi como <?php echo $_SESSION['contCartas']?> intentos</h3>
    <?php
        }else{
            ?>
    <h1>Fallo posiciones <?php echo $index1." y ".$index2;?> despues de <?php echo $_SESSION['contCartas']?> intentos</h1>
    <h3>Se le restara 1 punto, asi como <?php echo $_SESSION['contCartas']?> intentos</h3>
    <?php
        }
    ?>
    <h2>Puntos por jugador</h2>
    <?php
        $_SESSION['contCartas']=0;
        require_once 'conexion.php';
        
        $qrySelectAll='Select nombre,puntos,extra from jugador';
    ?>
    <a href="mostrarcartas.php">Volver a jugar</a>
</body>
</html>