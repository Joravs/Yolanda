<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficheros</title>
</head>
<body>
    <form action="<?php echo $_SERVER[""]?>" method="post" enctype="multipart/form-data">
        Seleccionar un fichero:
        <input type="file" name="filetoUpload" id="filetoUpload">
        <input type="submit" value="Enviar" name="enviar">
    </form>
    <?php
        if(isset($_POST["enviar"])){
            $target_dir="uploads/";
            $target_file=$target_dir.basename($_FILES["filetoUpload"]["name"]);
            $uploadOk=1;
            $fileType=pathinfo($target_file, PATHINFO_EXTENSION);

            if($fileType!="txt"){
                echo "Solo se permiten archivos de texto.";
                $uploadOk=0;
            }
            if(file_exists($target_file)){
                echo "El archivo ya existe.";
                $uploadOk=0;
            }
            if($_FILES["filetoUpload"]["size"]>300000){
                echo "El archivo es demasiado largo.";
                $uploadOk=0;
            }
            if($uploadOk==1){
                echo "El fichero subido correctamente";
            }
        }
    ?>
</body>
</html>