<?php
    session_start();
    require_once '../BBDD/ctdb.php';
    $fechaHoy=date('Y-m-d');
    function consulta($idpersona){
        global $conn;
        $slct = $conn -> prepare ('SELECT img.imagen from agenda a 
                inner join imagenes');
        $slct-> execute();
        $slct->bind_result($img,$idimagen);

        echo '<table>';
        $saltoLinea=0;
        while($slct->fetch()){
            if($saltoLinea==0){
                echo '<tr>';
            }
            $saltoLinea++;
            echo "<td>
                    <div><img src='../{$img}'></div>
                    <div>{$img}</div>
                </td>";
            if($saltoLinea==4){
                $saltoLinea=0;
                echo '</tr>';
            }
        }
        echo '</table>';
    }
    if(isset($_POST['enviar'])){
    }

    $log=isset($_SESSION['log']) ? $_SESSION['log'] :'';
    unset($_SESSION['log']);
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
        table,td{
            border:1px solid #000;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <h1>Ver Agenda</h1>
        </div>
        <form action='<?= $_SERVER['PHP_SELF'];?>' method="POST">
            <div class="mb-3 col-4">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" name="fecha" id="fecha" value="<?=$fechaHoy;?>"/>
            </div>
            <div class="mb-3 col-4">
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
            <button type="submit" class="btn btn-info mt-3" value="Enviar" name="enviar">Mostrar Agenda</button>
            <a href="ejercicio1.php">Volver al Listado</a>
        </form>
    </div>    
</body>
</html>