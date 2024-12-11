<?php
    session_start();
    $img=['<img src="img/OIP0.jfif">','OIP1.jfif','OIP2.jfif','OIP3.jfif','OIP4.jfif'];
    if(!isset($_SESSION['cont'])){
        $_SESSION['imgs']=[$img[array_rand($img)],$img[array_rand($img)],$img[array_rand($img)],$img[array_rand($img)],$img[array_rand($img)]];
        $_SESSION['cont']=1;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGENDA</title>
</head>
<body>
    <h1>Agenda</h1>
    <p>Hola, cuantos contactos deseas grabar?</p>
    <p>Puedes grabar entre 1 y 5. Por cada posicion en INCREMENTAR grabaras un usuario mas</p>
    <p>Cuando el numero sea el deseado pulsa GRABAR</p>
    <?php
        for($i=0;$i<$_SESSION['cont'];$i++){
            echo `<img src='img/{$_SESSION['imgs'][$i]}'>`;
        }
    ?>
    <img src="img/OIP0.jfif" alt="">
    <form action="comprobar.php" method="post">
        <input type="submit" value="Incrementar" name="incrementar">
        <input type="submit" value="Grabar" name="grabar">
    </form>
</body>
</html>