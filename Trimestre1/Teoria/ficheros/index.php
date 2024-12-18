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
		#img0{
			
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
			$j=1;
			for($i=0;$i<10;$i++){
				$cont=0;
				echo "<img src='uploads/{$_SESSION['arbol'][$i]}' id='img$i'>";
				$cont++;
				if($cont=$j){
					echo "<br>";
					$j++;
				}
			}
        }
    ?>
</body>
</html>