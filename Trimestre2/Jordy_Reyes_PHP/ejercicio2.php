<?php
    require_once './ctdb.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pictograma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    <style>
        img{
            width: 200px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <h3>Añadir datos agenda</h3>
        <form action='<?= $_SERVER['PHPSELF'];?>' method="POST">
            <div class="col-4">
                <label for="fecha">Fecha: </label>
                <input type="date" name="fecha" id="fecha">
            </div>
            <div class="col-4">
                <label for="hora">Hora: </label>
                <input type="time" name="hora" id="hora">
            </div>
            <div class="col-4">
                <label for="persona">Persona: </label>
                <input type="text" name="persona" id="persona">
            </div>
        </form>
    </div>    
</body>
</html>
