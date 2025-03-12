<?php 
    require_once '../functions/php/auth/comprobarlogueo.php'; $username=$_SESSION['username']; require_once '../functions/php/qryconsultartabla.php';
?>
<!doctype html>
<html lang="es">
    <head>
        <title>Gestor de Administracion de Insulina</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" href="../favicon.webp" type="image/webp">
    </head>

    <body>
        <div class="container-fluid font-ratushy">
            <?php include 'navbar.html';?>
            <form class="row g-3 needs-validation text-white text-center" autocomplete="off" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
                <legend>Selecciona fecha para ver datos</legend>
                <div class="row d-flex align-items-baseline mx-auto col-6">
                    <div class="mb-3 col">
                        <label for="month" class="form-label fs-5">Mes y Año</label>
                        <input type="month" class="form-control" name="month" id="month" aria-describedby="helpId" placeholder=""/>
                    </div>
                </div>
                <button type="submit" class="btn btn-secondary btn-md">Buscar</button>
            </form>
            <?php if (isset($_POST['month'])){
            ?>
            <div class="accordion" id="accordion">
                <?php 
                    $comidas=['Desayuno','Mediodia','Comida','Merienda','Cena'];
                    $diaActual=date("d");
                    $mesActual=$_POST['month'];
                    foreach($comidas as $c){
                ?>
                <div class="accordion-item bg-transparent">
                    <h2 class="accordion-header" id="heading<?= $c;?>">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $c;?>" aria-expanded="false" aria-controls="<?= $c;?>">
                        <?= $c;?>
                    </button>
                    </h2>
                    <div id="<?= $c;?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $c;?>" data-bs-parent="#accordion">
                    <div class="accordion-body">
                        <div class="table-responsive mt-4">
                            <table class="table table-striped table-bordered table-primary align-middle">
                                <thead class="table-light">
                                <caption></caption>
                                    <tr>
                                        <th colspan="14" scope="colgroup" class="text-center"><?= $c;?></th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr>
                                        <th scope="row"></th>
                                        <th colspan="4"></th>
                                        <th colspan="2">Hipo</th>
                                        <th colspan="3">Hiper</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <th>GL/1h</th>
                                        <th>Rac.</th>
                                        <th>Insu.</th>
                                        <th>GL/2h</th>
                                        <th>Glu.</th>
                                        <th>Hora</th>
                                        <th>Glu.</th>
                                        <th>Hora</th>
                                        <th>Corr.</th>
                                        <th>Deporte</th>
                                        <th>Lenta</th>
                                    </tr>
                                    <?php
                                        for($i=1;$i<=$diaActual;$i++){
                                            echo "<tr>";
                                            echo "<td>Dia $i</td>";
                                            if($i<=$diaActual){
                                                $fechaMostrar=$mesActual."-".$i;
                                                $selectTabla=consultarTabla($username,$fechaMostrar,$c);
                                                $selectTabla->bind_result($glu1,$racion,$insulina,$glu2,$hipoGlu,$hipoHora,$hiperGlu,$hiperHora,$hiperCorr,$cgDeporte,$cgLenta,$tipoComida);
                                                if($selectTabla->fetch()){
                                                    echo sprintf( "
                                                    <th>%d</th>
                                                    <th>%d</th>
                                                    <th>%d</th>
                                                    <th>%d</th>
                                                    <th>%d</th>
                                                    <th>%s</th>
                                                    <th>%d</th>
                                                    <th>%s</th>
                                                    <th>%d</th>"
                                                    ,$glu1,$racion,$insulina,$glu2,$hipoGlu,$hipoHora,$hiperGlu,$hiperHora,$hiperCorr
                                                    );}else{echo "<th scope='row' colspan='9'>No hay datos</th>";}
                                                if($cgDeporte!=null){echo sprintf("<td>%d</td>",$cgDeporte);}else{echo "<th scope='row'></th>";}
                                                if($cgLenta!=null){echo sprintf("<td>%d</td>",$cgLenta);}else{echo "<th scope='row'></th></th>";}
                                            }
                                        }
                                            echo "</tr>";
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <?php }?>
        </div>
    </body>
</html>