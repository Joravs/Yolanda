<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pictograma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    <style>
        td{
        align-items:baseline; 
        }
        img{
            width: 200px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
<?php
    require_once 'tablaPicto.php'; 

    obtenerImagenes();
?>
    </div>    
</body>
</html>