<?php require_once '../functions/php/auth/comprobarlogueo.php';
    if(isset($_SESSION['log'])){
        $log="<span id='log' class='col-12 d-flex justify-content-between py-2 mb-0'><p>{$_SESSION['log']}</p><button id='btnlog'>X</button></span>
        <script src='../functions/js/log.js'>
        </script>";
        unset($_SESSION['log']);
    }
?>
<!doctype html>
<html lang="es">
    <head>
        <title>Gestor de Administracion de Insulina</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" href="../favicon.webp" type="image/webp">
    </head>

    <body>
        <?php if(isset($log)){echo $log;} ?>
        <div class="container-fluid font-ratushy col-8 overflow-hidden">
            <div class="row text-center text-white mb-5 mt-3">
                <h1>Gestor de Administracion de Insulina</h1>
            </div>
            <div class="row">
                <div class="row">
                    <div class="text-center text-white fs-5">
                        <h1>Bienvenido, <?php echo $_SESSION['nombreUsuario']?></h1>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mb-5 my-auto">
                    <div class="col-12 mt-4 ms-4">
                        <div class="row mt-5 gap-3">
                            <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="window.location.href = 'consultarTabla.php'">Consultar Registros</button>
                            <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="window.location.href = 'addRegister.php'">Nuevo Registro</button>
                            <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="window.location.href = 'modRegister.php'">Modificar Registro</button>
                            <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="window.location.href = 'delRegister.php'">Eliminar Registro</button>
                            <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="window.location.href = 'estadisticas.php'">Estadisticas</button>
                            <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="window.location.href = '../index.php'">Salir</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>