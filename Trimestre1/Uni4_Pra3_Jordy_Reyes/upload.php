<?php
    $target_dir="uploads/";
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
?>