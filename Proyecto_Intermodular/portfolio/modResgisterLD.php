<?php require_once '../functions/php/auth/comprobarlogueo.php';$username=$_SESSION['username'];?>
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
                <div id="form" class="rounded d-flex flex-column justify-content-center align-item-center mx-auto p-3" style="width: 50rem; margin-top:20vh;">
                    <form class="row g-3 needs-validation text-white text-center" autocomplete="off" method="post" action="../functions/php/qrymodregisterLD.php">
                        <div id="ataqueglucemia" class="row justify-content-center">
                            <h2><?php echo isset($_POST['deporte'])?'Deporte':'Lenta';?></h2>
                            <div class="mb-3 col-6">
                                <label for="fecha" class="form-label fs-4">Fecha</label>
                                <input type="date" class="form-control" name="fecha" id="fecha" aria-describedby="helpId" value="<?php echo $_POST['fecha'];?>"readonly/>
                            </div>
                            <?php if(isset($_POST['deporte'])){ ?>
                                <div class="col-6 mb-3">
                                    <label for="deporte" class="form-label fs-4">Deporte</label>
                                    <input type="number" class="form-control" name="deporte" id="deporte" aria-describedby="helpId" placeholder="" min="1" required/>                                
                                </div>
                            <?php }else{?>
                                <div class="col-6 mb-3">
                                    <label for="lenta" class="form-label fs-4">Lenta</label>
                                    <input type="number" class="form-control" name="lenta" id="lenta" aria-describedby="helpId" placeholder="" min="1" required/>                                
                                </div>
                            <?php }?>
                        </div>
                        <button type="submit" class="btn btn-secondary btn-md">Modificar</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
