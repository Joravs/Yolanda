<?php
    function validar_url() {
        $urlErr=null;
        if (empty($_POST['url'])){
            $urlErr="* URL vacia";
        }else{
            if (!filter_var($_POST['url'], FILTER_VALIDATE_URL)){
                $urlErr="* URL incorrecta";
            }
        }
        return $urlErr;
    }
?>