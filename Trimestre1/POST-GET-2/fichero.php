<?php
    if(isset($_POST['n1'])){
        echo "<script> alert('".$_POST['n1'] .", ". $_POST['n2']."')</script>";
        unset($_POST);
    }else{
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario</title>
    </head>
    <body>
        <!--Formulario con n1 y apellido-->
        <form action="" method="post">
            <label for="n1">N1:</label>
            <input type="text" id="n1" name="n1" required><br><br>
            <label for="n2">N2:</label>
            <input type="text" id="n2" name="n2" required><br><br>
            <input type="submit" value="Sumar">
        </form>
    </body>
    </html>
<?php } ?>