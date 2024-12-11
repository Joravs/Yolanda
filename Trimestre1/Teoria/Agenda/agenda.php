<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>
    <h1>Hola <?php echo $_SESSION['usuario']?></h1>
    <?php
    echo '<form action="grabado.php" method="post">';
        for($i=0;$i<$_SESSION['cont'];$i++){
            $j=$i+1;
            echo "
            <fieldset>Contacto {$j}<br>
            <label for='nombre{$j}'>Nombre {$j}:</label>
            <input type='text' name='nombre{$j}' id='nombre{$j}' required><br>
            <label for='email1'>Email {$j}</label>
            <input type='email' name='email{$j}' id='email{$j}' required><br>
            <label for='telefono{$j}'>Teléfono {$j}:</label>
            <input type='tel' name='telefono{$j}' id='telefono{$j}'' required><br>
            </fieldset>
        ";
        }
        echo '<input type="submit" value="grabar" name="grabar">';
        echo '</form>';
    ?>
</body>
</html>