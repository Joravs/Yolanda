<?php
    session_start();
    if($_POST['incrementar']){
        if($_SESSION['cont']==5){
            header('Location: ');
        }
        $_SESSION['cont']++;
        header('Location: inicio.php');
    }else{
        header('Location: ');
    }
?>