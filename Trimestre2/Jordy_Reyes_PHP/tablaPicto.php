<?php
    require_once './ctdb.php';

    function obtenerImagenes(){
        global $conn;
        $slct = $conn -> prepare ('SELECT imagen from imagenes');
        $slct-> execute();
        $slct->bind_result($img);
    
        echo '<table>';
        $saltoLinea=0;
        while($slct->fetch()){
            if($saltoLinea==0){
                echo '<tr>';
            }
            $saltoLinea++;
            echo "<td>
                    <div><img src='{$img}'></div>
                    <div>{$img}</div>
                  </td>";
            if($saltoLinea==4){
                $saltoLinea=0;
                echo '</tr>';
            }
        }
        echo '</table>';
    }
?>