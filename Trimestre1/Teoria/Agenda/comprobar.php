<?php
    session_start();
    if($_POST['incrementar']){
        $_SESSION['cont']++;
        header('Location: inicio.php');
    }
?>