<?php 
    session_start();
    $_SESSION['coloresPulsados'][$_SESSION['cont']]=$_POST['color'];
    $_SESSION['cont']++;
    if($_SESSION['cont']>=4){
        $aciertos=0;
        for($i=0;$i<4;$i++){
            if($_SESSION['coloresPulsados'][$i]==$_SESSION['coloresValidos'][$i]){
                $aciertos++;
            }
        }
        if($aciertos==4){
            header("Location: acierto.php");
            exit;
        }else{
            header("Location: fallo.php");
            exit;
        }
    }else{
        header("Location: jugar.php");
        exit;
    }
?>