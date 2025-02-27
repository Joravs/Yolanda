<?php
    require_once './ctdb.php';
    $fechaHoy=date('Y-m-d');
    function obtenerImagenes(){
        global $conn;
        $slct = $conn -> prepare ('SELECT imagen from imagenes');
        $slct-> execute();
        $slct->bind_result($img);

        echo '<table>';
        $saltoLinea=0;
        while($slct->fetch()){
            if($saltoLinea==0){
                echo '<tr>';
            }
            $saltoLinea++;
            echo "<td>
                    <div><input type='radio' class='mostrarInput' name='actividad' id='actividad'><img value='{$img}' src='{$img}'></input></div>
                    <div>{$img}</div>
                </td>";
            if($saltoLinea==4){
                $saltoLinea=0;
                echo '</tr>';
            }
        }
        echo '</table>';
    }
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
            <div class="mb-3 col-4">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" name="fecha" id="fecha" value="<?=$fechaHoy;?>"/>
            </div>
            <div class="mb-3 col-4">
                <label for="hora" class="form-label">Hora</label>
                <input type="time" class="form-control" name="hora" id="hora"/>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Persona</label>
                <select class="form-select form-select-lg" name="persona" id="persona">
                    <?php
                        $usu=$conn->prepare("SELECT nombre,idpersona from personas");
                        $usu->execute();
                        $usu->bind_result($nombre,$idpersona);
                        while ($usu->fetch()){
                            echo "<option value='{$idpersona}'>{$nombre}</option>";
                        }
                    ?>
                </select>
            </div>
            <?php
                obtenerImagenes();
            ?>
            <input type="submit" value="enviar" name="enviar">
        </form>
    </div>    
</body>
</html>
