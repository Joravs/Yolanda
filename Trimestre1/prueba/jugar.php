<?php
    session_start();
    include "pintar-circulos.php";
    function actionForm(){
        if($_SESSION['contador']==3){
            $acierto=0;
            for ($i=1;$i<=4;$i++){
                if ($_SESSION['circulo'.$i]==$_SESSION['resp'.$i]){
                    $acierto++;
                }
            }
            if ($acierto==4){
                echo "acierto.php";
            }else{
                echo "fallo.php";
            }
        }else{echo $_SERVER['PHP_SELF'];} 
    }
?>   
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jugar</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Adivina</h1>
        <form action="<?php actionForm()?>" method="post">
<?php
        if (isset($_POST['jugar'])){
            $_SESSION['contador']=0;
            $color="black";
            for($i=1;$i<=count($_POST)-1;$i++){
                $_SESSION['circulo'.$i]=$_POST['circulo'.$i];
                $_SESSION['resp'.$i]=$color;
            }
            pintar_circulos($color,$color,$color,$color);
        }else{
            $_SESSION['contador']++;
            $_SESSION['resp'.$_SESSION['contador']]=$_POST['color'];
            pintar_circulos($_SESSION['resp1'],$_SESSION['resp2'],$_SESSION['resp3'],$_SESSION['resp4']);
        }
        ?>
        <br><br>
        <button type="submit" name="color" value="red" style="background-color: red">Rojo</button>
        <button type="submit" name="color" value="yellow" style="background-color: yellow">Amarillo</button>
        <button type="submit" name="color" value="green" style="background-color: green">Verde</button>
        <button type="submit" name="color" value="blue" style="background-color: blue">Azul</button>
    </form>
</body>
</html>