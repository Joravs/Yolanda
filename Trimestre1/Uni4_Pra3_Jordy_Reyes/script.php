<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficheros</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data">
        Seleccionar un fichero:
        <input type="file" name="ficheroSubir" id="ficheroSubir"> 
        <input type="submit" value="Enviar" name="enviar">
    </form>
    <?php
        if(isset($_POST["enviar"])){
            $target_dir="uploads/";/*Carpeta donde se almacenaran los archivos*/
            $target_file=$target_dir.basename($_FILES["ficheroSubir"]["name"]);/*Path completo del archivo*/
            $uploadOk=1;/*Indicador de OK*/
            $fileType=pathinfo($target_file, PATHINFO_EXTENSION);/*Sacar informacion del tipo de archivo*/

            if($fileType!="txt"){
                echo "Solo se permiten archivos de texto.";
                $uploadOk=0;
            }
            if(file_exists($target_file)){
                echo "El archivo ya existe.";
                $uploadOk=0;
            }
            if($_FILES["filetoUpload"]["size"]>307200){
                echo "El archivo es demasiado largo.";
                $uploadOk=0;
            }
            if(move_uploaded_file($_FILES["filetoUpload"]["tmp_name"], $target_file)){ 
                echo "El fichero subido correctamente";
		/*Mover archivo al directorio destino*/
            }
        }
    ?>
</body>
</html>
