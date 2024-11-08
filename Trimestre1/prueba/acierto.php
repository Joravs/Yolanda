<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acierto</title>
</head>
<body>
    <h1>Simon</h1>
    <?php
        $acierto=0;
        for ($i=1;$i<=4;$i++){
            if ($_SESSION['circulo'.$i]==$_SESSION['resp'.$i]){
                $acierto++;
            }
        }
        if ($acierto==4){
            echo "<h2>Has acertado todos los colores</h2>";
        }
    ?>
</body>
</html>