<?php require_once '../functions/php/auth/comprobarlogueo.php'; $username=$_SESSION['username']; require_once '../functions/php/qryconsultamod.php';?>
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
        <div class="container-fluid font-ratushy">
            <?php include 'navbar.html';?>
            <div class="row">
                <div class="table-responsive mt-4">
                    <table class="table table-striped table-bordered table-primary align-middle">
                        <thead class="table-light">
                        <caption></caption>
                            <tr>
                                <th class="table-light">Tipo Comida</th>
                                <th class="table-light">Fecha</th>
                                <th class="table-light">Hipoglucemia</th>
                                <th class="table-light">Hiperglucemia</th>
                                <th class="table-light">Toda la comida</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider text-white">
                            <?php 
                                $selctTabla=consultarMod($username);
                                $selctTabla->bind_result($fecha,$hipoGlu,$hipoHora,$hiperGlu,$hiperHora,$corr,$tipocomida,$glu1,$rac,$insulina,$glu2);
                                while($selctTabla->fetch()){
                                    echo '<form action="../functions/php/qrydelregister.php" method="post" autocomplete="off"><tr>';
                                    echo sprintf(' 
                                    <td ><input name="tipocomida" value="%s" readonly></td>
                                    <td ><input name="fecha" value="%s" readonly></td>
                                    ',$tipocomida,$fecha);
                                    if($hipoGlu==0){
                                        echo ('<td>❎<button type="submit" name="hipo" class="btn btn-secondary btn-md">Eliminar</button></td>');
                                    }else{
                                        echo ('<td>✅<button type="submit" name="hipo" class="btn btn-secondary btn-md">Eliminar</button></td>');
                                    }
                                    if($hiperGlu==0){
                                        echo ('<td>❎<button type="submit" name="hiper" class="btn btn-secondary btn-md">Eliminar</button></td>');
                                    }else{
                                        echo ('<td>✅<button type="submit" name="hiper" class="btn btn-secondary btn-md">Eliminar</button></td>');
                                    }
                                    echo ('<td><button type="submit" name="completa" class="btn btn-secondary btn-md">Eliminar</button></td>');
                                    echo '</tr></form>';
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <script src="../functions/js/toggleOptions.js"></script>
        </div>
    </body>
</html>
