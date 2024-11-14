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
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label for="num">Adivina mi numero</label>
        <input type="number" name="num" id="num">
        <input type="submit" value="Enviar" name="enviar">
        <?php
        if(!isset($_POST['enviar'])){
            $_SESSION['numRand']=generarNumero();
        }else{
            $numeroes=mayorMenor($_POST['num'],$_SESSION['numRand']);
            echo "<h3>Tu numero es:".$_POST['num']."</h3>";
            switch($numeroes){
                case "Mayor":
                case "Menor":
                    echo "<h3>Mi numero es ".$numeroes."</h3>";
                    break;
                case "True":
                        echo "<h2>ENHORABUENA, HAS ACERTADO</h2>";
            }
        }
        ?>
    </form>
    <a href="<?php session_destroy(); echo $_SERVER['PHP_SELF']?>">Sigue jugando...</a>
</body>
</html>