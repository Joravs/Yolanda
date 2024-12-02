<?php
    $colores=['red','yellow','green','blue'];
    $colorBlack='black';

    function pintar_circulos($col){
        for($i=0;$i<count($col);$i++){
            echo '<input type="button" name="'.$col[$i].'" style="background-color:'.$col[$i].'; border-radius:50%; width:100px; height:100px;"></input>';
        }
    }
?>