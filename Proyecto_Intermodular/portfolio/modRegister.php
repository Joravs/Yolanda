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
            <?php if (isset($_POST['fecha'])){
                $fecha = $_POSt['fecha'];
            ?>
            <div class="row">
                <div class="table-responsive mt-4">
                    <table class="table table-striped table-bordered table-primary align-middle">
                        <thead class="table-light">
                        <caption></caption>
                            <tr>
                                <th class="table-light">Fecha</th>
                                <th class="table-light">Tipo Comida</th>
                                <th class="table-light">Glucosa antes</th>
                                <th class="table-light">Racion</th>
                                <th class="table-light">Insulina</th>
                                <th class="table-light">Glucosa despues</th>
                                <th class="table-light">Hipoglucemia</th>
                                <th class="table-light">Hiperglucemia</th>
                                <th class="table-light">Todo</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider text-white">
                            <?php 
                                $selctTabla=consultarMod($username);
                                $selctTabla->bind_result($fecha,$hipoglu,$hipohora,$hiperglu,$hiperhora,$corr,$tipocomida,$glu1,$rac,$insulina,$glu2);
                                while($selctTabla->fetch()){
                                    echo '<form action="modRegisterHipoper.php" method="post" autocomplete="off"><tr>';
                                    echo sprintf(' 
                                    <td ><input name="fecha" value="%s" readonly></td>
                                    <td ><input name="tipocomida" value="%s" readonly></td>
                                    <td ><input name="glucosa1" value="%s" readonly></td>
                                    <td ><input name="racion" value="%s" readonly></td>
                                    <td ><input name="insulina" value="%s" readonly></td>
                                    <td ><input name="glucosa2" value="%s" readonly></td>
                                    <td class="d-none"><input name="hipoglu" value="%s" readonly></td>
                                    <td class="d-none"><input name="hipohora" value="%s" readonly></td>
                                    <td class="d-none"><input name="hiperglu" value="%s" readonly></td>
                                    <td class="d-none"><input name="hiperhora" value="%s" readonly></td>
                                    <td class="d-none"><input name="correccion" value="%s" readonly></td>
                                    ',$fecha,$tipocomida,$glu1,$rac,$insulina,$glu2,$hipoglu,$hipohora,$hiperglu,$hiperhora,$corr);
                                    if($hipoglu==0){
                                        echo ('<td>❎<button type="submit" class="btn btn-secondary btn-md">Modificar</button></td>');
                                    }else{
                                        echo ('<td>✅<button type="submit" class="btn btn-secondary btn-md">Modificar</button></td>');
                                    }
                                    if($hiperglu==0){
                                        echo ('<td>❎<button type="submit" name="hiper" class="btn btn-secondary btn-md">Modificar</button></td>');
                                    }else{
                                        echo ('<td>✅<button type="submit" name="hiper" class="btn btn-secondary btn-md">Modificar</button></td>');
                                    }
                                    echo ('<td><button type="submit" name="todo" class="btn btn-secondary btn-md">Modificar</button></td></tr>');
                                    echo '</form></tr>';
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive mt-4">
                    <table class="table table-striped table-bordered table-primary align-middle">
                        <thead class="table-light">
                        <caption></caption>
                            <tr>
                                <th class="table-light">Fecha</th>
                                <th class="table-light">Lenta</th>
                                <th class="table-light">Deporte</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider text-white">
                            <?php 
                                $selctLD=consultaLentaDeporte($username);
                                $selctLD->bind_result($fecha,$lenta,$deporte);
                                while($selctLD->fetch()){
                                    echo '<form action="modResgisterLD.php" method="post" autocomplete="off"><tr>';
                                    echo sprintf(' 
                                    <td ><input name="fecha" value="%s" readonly></td>
                                    ',$fecha);
                                    if($lenta==0){
                                        echo ('<td>❎<button type="submit" class="btn btn-secondary btn-md">Modificar</button></td>');
                                    }else{
                                        echo ('<td>✅<button type="submit" class="btn btn-secondary btn-md">Modificar</button></td>');
                                    }
                                    echo sprintf('<td>%d <button type="submit" name="deporte" class="btn btn-secondary btn-md">Modificar</button></td>',$deporte);
                                    echo '</tr></form>';
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <?php }?>
            </div>
            <script src="../functions/js/toggleOptions.js"></script>
        </div>
    </body>
</html>
