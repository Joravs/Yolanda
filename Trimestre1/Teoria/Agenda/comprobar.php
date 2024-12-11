<?php
    session_start();
    if($_POST['incrementar']){
        if($_SESSION['cont']==5){
            header('Location: agenda.php');
            exit;
        }
        $_SESSION['cont']++;
        header('Location: inicio.php');
        exit;
    }else{
        header('Location: agenda.php');
        exit;
    }
?>