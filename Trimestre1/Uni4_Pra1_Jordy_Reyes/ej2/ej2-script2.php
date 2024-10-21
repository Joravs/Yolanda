<?php
    if ($_POST["edad"]<=14){
        echo "Eres una personita";
    }else if($_POST["edad"]<21){
        echo "Todavia eres muy joven";
    }else if($_POST["edad"]<41){
        echo "Eres una persona joven";
    }else if($_POST["edad"]<61){
        echo "Eres una persona madura";
    }else{
        echo "Ya eres una persona mayor";
    }
?>