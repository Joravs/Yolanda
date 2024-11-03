<?php
    function validar_url($value) {
        $urlErr="URL correcta";
        if (empty($value)){
            $urlErr="URL vacia";
        }else{
            if (!filter_var($value, FILTER_VALIDATE_URL)){
                $urlErr="URL incorrecta";
            }
        }
        return $urlErr;
    }
?>