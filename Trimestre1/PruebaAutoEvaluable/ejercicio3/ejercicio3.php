<?php
    session_start();
    function generarNumero(){
        return $numero=rand(1,100);
    }
    function mayorMenor($num1,$num2){
        if($num1>$num2){
            $resp="Mayor";
        }else{
            $resp="Menor";
        }
        if($num1==$num2){
            $resp="True";
        }
        return $resp;
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head> 
<body>
<?php
    if(!isset($_POST['enviar'])){
        echo $_SESSION['numRand']=generarNumero();
        $_SESSION['cont']=0;
?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label for="num">Adivina mi numero</label>
        <input type="number" name="num" id="num">
        <input type="submit" value="Enviar" name="enviar">
    </form>
<?php
    }else{
    $numeroes=mayorMenor($_SESSION['numRand'],$_POST['num']);
    echo "<h3>Tu numero es:".$_POST['num']."</h3>";
    switch($numeroes){
        case "Mayor":
            case "Menor":
                echo "<h3>Mi numero es ".$numeroes."</h3>";
                $_SESSION['cont']++;
                echo '<a href="'.$_SERVER['PHP_SELF'].'">Sigue jugando...</a>';
                break;
                case "True":
                    echo "<h2>ENHORABUENA, HAS ACERTADO</h2>";
                    echo '<h3>Has necesitado '.$_SESSION['cont'].' intentos</h3>';
                    session_destroy();
                }
            }
?>
</body>
</html>