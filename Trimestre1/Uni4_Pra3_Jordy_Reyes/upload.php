<?php
    /**$target_dir="uploads/";
    $target_file=$target_dir.basename($_FILES["filetoUpload"]["name"]);
    $uploadOk=1;
    $imageFileType=pathinfo($target_file, PATHINFO_EXTENSION);

    $check=getimagesize($_FILES["filetoUpload"]["tmp_name"]);
    if($check !== false) {
        echo "El archivo es una imagen - ". $check["mime"]. ".";
        $uploadOk=1;
    }else{
        echo "El archivo no es una imagen.";
        $uploadOk=0;
    }
    if(file_exists($target_file)){
        echo "El archivo ya existe.";
        $uploadOk=0;
    }
    if($_FILES["filetoUpload"]["size"]>500000){
        echo "El archivo es demasiado grande.";
        $uploadOk=0;
    }
    if($imageFileType !="jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif"){
        echo "Solo se permiten imágenes JPG, PNG, JPEG y GIF.";
        $uploadOk=0;
    }*/
    $target_file=$target_dir.basename($_FILES["filetoUpload"]["name"]);
    $uploadOk=1;
    $imageFileType=pathinfo($target_file, PATHINFO_EXTENSION);

    
?>