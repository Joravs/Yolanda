<?php
    function palindromo_chk($str){
        $str=strtolower($str);

        if ($str==(strrev($str))){
            return true;
        }else{
            return false;
        }
    }

    $str="Ana";
    if (palindromo_chk($str)){
        echo "La palabra $str es palindromo";
    }else{
        echo "La palabra $str no es palindromo";
    }
?>