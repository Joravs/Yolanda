<?php
	session_start();
		$target_dir="uploads/";
			$uploadOk=1;
			for($i=0;$i<10;$i++){
				$_SESSION['arbol'][$i]=$_FILES["ficheroSubir".$i]["name"];
				$fileType[]=pathinfo($_SESSION['arbol'][$i], PATHINFO_EXTENSION);
				if(move_uploaded_file($_FILES["ficheroSubir".$i]["tmp_name"], $_SESSION['arbol'][$i])){
					$uploadOk=1;
				}
			}
		header('Location: index.php');
		exit;
?>