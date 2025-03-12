<?php require_once '../functions/php/auth/comprobarlogueo.php'; require_once '../functions/bd/qrystats1.php'; require_once '../functions/bd/qrystats2.php';?>
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
        <div class="container-fluid font-ratushy col-8">
            <?php include 'navbar.html';?>
            <div class="row">
                <div id="form" class="rounded d-flex flex-column justify-content-center align-item-center mx-auto p-3" style="width: 50rem; margin-top:5vh;">
                    <form class="row g-3 needs-validation text-white text-center" autocomplete="off" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
                        <legend>Selecciona fecha a mostrar la suma de glucosa por tipo de comida</legend>
                        <div class="row d-flex align-items-baseline mx-auto col-12">
                            <div class="mb-3">
                                <label for="fecha" class="form-label fs-5">Fecha</label>
                                <input type="date" class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder=""/>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-secondary btn-md">Buscar</button>
                    </form>
                    <h1 class="mt-2"><?=isset($_POST['fecha'])?$_POST['fecha']:'';?></h1>
                    <?=isset($_POST['fecha'])?"<canvas id=chartCanvas class='w-100 mx-auto'></canvas>":'';?>
                </div>
                    <?php
                        if(isset($_POST['fecha'])){
                            $stats1->bind_param('ds',$_SESSION['idUsuario'],$_POST['fecha']);
                            $stats1->execute();
                            $stats1->store_result();
                            $stats1->bind_result($suma,$hipo,$hiper,$tc,$f);
                            while($stats1->fetch()){
                                $suma=$hipo!=null?$suma+$hipo:$suma;
                                $suma=$hiper!=null?$suma+$hiper:$suma;
                                echo "<input class='d-none' id='{$tc}' value='";
                                    echo  $suma;
                                echo "'></input>";}
                        }
                    ?>
            </div>
            <div class="row">
                <div id="form" class="rounded d-flex flex-column justify-content-center align-item-center mx-auto p-3" style="width: 50rem; margin-top:5vh;">
                    <form class="row g-3 needs-validation text-white text-center" autocomplete="off" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
                        <legend>Episodios de Hiperglucemia e Hipoglucemia por mes</legend>
                        <div class="row d-flex align-items-baseline mx-auto">
                            <div class="mb-3 col-12 col-md-6">
                                <label for="fecha1" class="form-label fs-5">Desde</label>
                                <input type="date" class="form-control" name="fecha1" id="fecha1" aria-describedby="helpId" placeholder="" required/>
                            </div>
                            <div class="mb-3 col-12 col-md-6">
                                <label for="fecha" class="form-label fs-5">Hasta</label>
                                <input type="date" class="form-control" name="fecha2" id="fecha2" aria-describedby="helpId" placeholder="" required/>
                            </div>
                        </div>
                        <button type="submit" name='envbiar' class="btn btn-secondary btn-md">Mostrar</button>
                    </form>
                    <?php
                        if(isset($_POST['envbiar'])){
                            $stats2->bind_param('dss',$_SESSION['idUsuario'],$_POST['fecha1'],$_POST['fecha2']);
                            $stats2->execute();
                            $stats2->store_result();
                            $stats2->bind_result($mes,$hipo,$hiper);
                            while($stats2->fetch()){
                            echo "<input class='d-none' id='datos' value='";
                                echo  $hiper.",";
                                echo  $hipo.",";
                            echo "'></input>";}
                        }
                    ?>
                    <?= isset($_POST['envbiar']) ? 
                    '<h1 class="mt-2">Desde: ' . htmlspecialchars($_POST['fecha1']) . ', Hasta: ' . htmlspecialchars($_POST['fecha2']) . '</h1>' .
                    '<canvas id="myPieChart" class="mx-auto"></canvas>' : '' ?>
                </div>
            </div>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script src="../functions/js/chartPie.js"></script>
                <script src="../functions/js/otraStat.js"></script>
        </div>
    </body>
</html>