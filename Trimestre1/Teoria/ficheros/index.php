<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficheros</title>
	<style>
		img{
			aspect-ratio: 1/1;
			width: 150px;
		}
		#tabla{
            display: flex;
            flex-direction: column;
            align-items:center;
            position:relative;
        }
        .fila5{
            position:absolute;
            z-index:-100;
            height:750px;
        }
	</style>
</head>
<body>
    <form action="validar.php" method="post" enctype="multipart/form-data">
        Seleccionar un fichero:
		<?php for($i=0;$i<10;$i++){
			echo "<input type='file' name='ficheroSubir$i' id='ficheroSubir$i'><br>";
		}?>
        <input type="submit" value="Enviar" name="enviar">
    </form>
    <?php
	    session_start();
        if(isset($_SESSION['arbol'])){
            echo<<<_END
            <div id="tabla">
                <div class="fila1">
                <td><img src="{$_SESSION['arbol'][0]}"></td>
                </div>
                <div class="fila2">
                <td><img src="{$_SESSION['arbol'][1]}"></td>
                <td><img src="{$_SESSION['arbol'][2]}"></td>
                </div>
                <div class="fila3">
                <td><img src="{$_SESSION['arbol'][3]}"></td>
                <td><img src="{$_SESSION['arbol'][4]}"></td>
                <td><img src="{$_SESSION['arbol'][5]}"></td>
                </div>
                <div class="fila4">
                <td><img src="{$_SESSION['arbol'][6]}"></td>
                <td><img src="{$_SESSION['arbol'][7]}"></td>
                <td><img src="{$_SESSION['arbol'][8]}"></td>
                <td><img src="{$_SESSION['arbol'][9]}"></td>
                </div>
                <img class="fila5" src="uploads/stump_12888237.png">
                </div>
        _END;
        }
    ?>
</body>
</html>
