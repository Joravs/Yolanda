<?php
    if(isset($_POST['nombre'])){
        echo "<script> alert('".$_POST['nombre'] .", ". $_POST['apellidos']."')</script>";
        unset($_POST);
    }else{
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <!--Formulario con nombre y apellido-->
        <form action="" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            <label for="apellido">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" required><br><br>
            <input type="submit" value="Enviar">
        </form>
    </body>
    </html>
<?php } ?>