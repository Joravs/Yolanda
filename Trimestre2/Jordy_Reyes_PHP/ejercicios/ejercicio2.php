<?php
    session_start();
    require_once '../BBDD/ctdb.php';
    $fechaHoy=date('Y-m-d');
    $hora=date('H:i');
    if(isset($_POST['enviar'])){
        $insert=$conn->prepare('INSERT INTO agenda(fecha,hora,idpersona,idimagen) VALUES (?,?,?,?);');
        $insert->bind_param('ssii',$_POST['fecha'],$_POST['hora'],$_POST['persona'],$_POST['actividad']);
        $insert->execute();
        $_SESSION['log']='<span class="">Dato agendado</span>';
    }
    function obtenerImagenes(){
        global $conn;
        $slct = $conn -> prepare ('SELECT imagen,idimagen from imagenes');
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
                    <div><input type='radio' class='mostrarInput' name='actividad' value='{$idimagen}' id='actividad'><img src='../{$img}'><p>Imagen: {$idimagen}</p></input></div>
                    <div>{$img}</div>
                </td>";
            if($saltoLinea==4){
                $saltoLinea=0;
                echo '</tr>';
            }
        }
        echo '</table>';
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
            <h3>Añadir datos agenda</h3>
            <p><?=$log;?></p>
        </div>
        <form action='<?= $_SERVER['PHP_SELF'];?>' method="POST">
            <div class="mb-3 col-4">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" name="fecha" id="fecha" value="<?=$fechaHoy;?>"/>
            </div>
            <div class="mb-3 col-4">
                <label for="hora" class="form-label">Hora</label>
                <input type="time" class="form-control" name="hora" id="hora" value="<?=$hora;?>"/>
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
            <?php
                obtenerImagenes();
            ?>
            <button type="submit" class="btn btn-info mt-3" value="Enviar" name="enviar">Añadir entrada en agenda</button>
            <a href="ejercicio1.php">Volver al Listado</a>
        </form>
    </div>    
</body>
</html>
