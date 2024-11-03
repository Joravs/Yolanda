<?php
    function fieldreq(){
        if (isset($_POST['enviar'])){
            if (empty($_POST['name']) || empty($_POST['url']) || empty($_POST['sexo']) || empty($_POST['email'])){
                echo '* Required Fields';
            }
        }
    }   
?>