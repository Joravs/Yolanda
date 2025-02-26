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
                    <form class="row g-3 needs-validation text-white text-center" autocomplete="off" method="post" action="../functions/php/qrymodregister.php">
                        <div id="ataqueglucemia" class="row justify-content-center mt-2">
                            <h2><?php echo isset($_POST['todo'])?$_POST['tipocomida']:(isset($_POST['hiper'])?'Hiperglucemia':'Hipoglucemia')?></h2>
                            <div class="mb-3 col-6">
                                <label for="tipocomida" class="form-label fs-4">Tipo Comida</label>
                                <input type="text" class="form-control" name="tipocomida" id="tipocomida" aria-describedby="helpId" value="<?php echo $_POST['tipocomida'];?>" readonly/>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="fecha" class="form-label fs-4">Fecha</label>
                                <input type="date" class="form-control" name="fecha" id="fecha" aria-describedby="helpId" value="<?php echo $_POST['fecha'];?>"readonly/>
                            </div>
                            <?php if(isset($_POST['todo'])){ ?>
                                <div class="row d-flex align-items-baseline">
                                    <div class="mb-3 col-6">
                                        <label for="glu1" class="form-label fs-4">Glucosa antes de Comer</label>
                                        <input type="number" class="form-control" name="glu1" id="glu1" aria-describedby="helpId" value="<?= $_POST['glucosa1']; ?>" min="1" />
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="glu2" class="form-label fs-4">Glucosa despues de Comer</label>
                                        <input type="number" class="form-control" name="glu2" id="glu2" aria-describedby="helpId" value="<?= $_POST['glucosa2']; ?>" min="1" />
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="racion" class="form-label fs-4">Racion</label>
                                        <input type="number" class="form-control" name="racion" id="racion" aria-describedby="helpId" value="<?= $_POST['racion']; ?>" min="1" />
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label for="insulina" class="form-label fs-4">Insulina</label>
                                        <input type="number" class="form-control" name="insulina" id="insulina" aria-describedby="helpId" value="<?= $_POST['insulina']; ?>" min="1" />
                                    </div>
                                </div>
                            <?php }else{ ?>
                            <div class="mb-3 col-6">
                                <label for="hipoperGlu" class="form-label fs-4">Glucosa administrada</label>
                                <input type="number" class="form-control" name="hipoperGlu" id="hipoperGlu" aria-describedby="helpId" value="<?= isset($_POST['hipoglu'])?$_POST['hipoglu']:$_POST['hiperglu']; ?>" min="1" required/>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="hipoperHora" class="form-label fs-4">Hora</label>
                                <input type="time" class="form-control" name="hipoperHora" id="hipoperHora" aria-describedby="helpId" value="<?= isset($_POST['hipohora'])?$_POST['hipohora']:$_POST['hiperhora']; ?>" required/>
                            </div>
                            <?php }if(isset($_POST['hiper'])){ ?>
                                <div id="hiperAG" class="col-6 mb-3">
                                    <label for="correcion" class="form-label fs-4">Correccion</label>
                                    <input type="number" class="form-control" name="correccion" id="correccion" aria-describedby="helpId" value="<?=$_POST['correccion']; ?>" min="1" required/>                                
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
