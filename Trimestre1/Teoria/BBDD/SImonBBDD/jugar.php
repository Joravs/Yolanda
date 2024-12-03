<?php
    session_start();
    function juegoPulsar(){
        require_once 'pintar-circulos.php';
        if(!isset($_POST['color'])){
            $_SESSION['cont']=0;
            $_SESSION['coloresPulsados']=[];
            for($i=0;$i<count($colores);$i++){
                $_SESSION['coloresPulsados'][$i]=$colorBlack;
            }
            pintar_circulos($_SESSION['coloresPulsados']);
        }else{
            $_SESSION['coloresPulsados'][$_SESSION['cont']]=$_POST['color'];
            $_SESSION['cont']++;
            pintar_circulos($_SESSION['coloresPulsados']);
        }
    }
    function nextPage(){
        if($_SESSION['cont']>=4){
            $aciertos=0;
            for($i=0;$i<4;$i++){
                if($_SESSION['coloresPulsados'][$i]==$_SESSION['coloresValidos'][$i]){
                    $aciertos++;
                }
            }
            if($aciertos==4){
                echo "acierto.php";
            }else{
                echo "fallo.php";
            }
        }else{
            echo $_SERVER['PHP_SELF'];
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
    <form action="<?php nextPage()?>" method="post">
        <button type="submit" name="color" value="red" style="background-color:red;">Rojo</button>
        <button type="submit" name="color" value="yellow"style="background-color:yellow;">Amarillo</button>
        <button type="submit" name="color" value="green"style="background-color:green;">Verde</button>
        <button type="submit" name="color" value="blue"style="background-color:blue;">Azul</button>
    </form>
</body>
</html>