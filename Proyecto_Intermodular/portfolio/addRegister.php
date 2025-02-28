<?php require_once '../functions/php/auth/comprobarlogueo.php';?>
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
                    <form class="row g-3 needs-validation text-white text-center" autocomplete="off" method="post" action="../functions/php/qryaddregister.php">
                        <div class="mb-3">
                            <label for="tipoComida" class="form-label fs-4">Tipo de Comida</label>
                            <select class="form-select form-select-md" name="tipoComida" id="tipoComida">
                                <option selected value="Desayuno">Desayuno</option>
                                <option value="Mediodia">Mediodia</option>
                                <option value="Comida">Comida</option>
                                <option value="Merienda">Merienda</option>
                                <option value="Cena">Cena</option>
                            </select>
                        </div>
                        <div class="row d-flex align-items-baseline">
                            <div class="mb-3 col-6">
                                <label for="glu1" class="form-label fs-4">Glucosa antes de Comer</label>
                                <input type="number" class="form-control" name="glu1" id="glu1" aria-describedby="helpId" placeholder="" min="1" required/>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="glu2" class="form-label fs-4">Glucosa despues de Comer</label>
                                <input type="number" class="form-control" name="glu2" id="glu2" aria-describedby="helpId" placeholder="" min="1"/>
                            </div><!-- Este campo no es requerido obligatoriamente ya que la glucosa aplicada antes de comer tiene un efecto de 3 hr, por lo que este campo puede quedar vacio -->
                            <div class="mb-3 col-6">
                                <label for="racion" class="form-label fs-4">Racion</label>
                                <input type="number" class="form-control" name="racion" id="racion" aria-describedby="helpId" placeholder="" min="1" required/>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="insulina" class="form-label fs-4">Insulina</label>
                                <input type="number" class="form-control" name="insulina" id="insulina" aria-describedby="helpId" placeholder="" min="1" required/>
                            </div>
                        </div>
                        <div id="hipoper" class="d-flex justify-content-center gap-3">
                            <div class="form-check form-check-inline fs-5">
                                <input class="form-check-input" type="radio" name="hipoper" id="hipoper1" value="hipo"/>
                                <label class="form-check-label" for="hipoper1">Hipoglucemia</label>
                            </div>
                            <div class="form-check form-check-inline fs-5">
                                <input class="form-check-input"type="radio" name="hipoper" id="hipoper2" value="hiper"/>
                                <label class="form-check-label" for="hipoper2">Hiperglucemia</label>
                            </div>
                            <div id="quitarRadio" class="d-none form-check form-check-inline fs-5">
                                <input class="form-check-input"type="radio" name="hipoper" id="quitar" value="quitarRadio"/>
                                <label class="form-check-label" for="quitar">Desmarcar</label>
                            </div>
                        </div>
                        <div id="ataqueglucemia" class="row d-none justify-content-center">
                            <div class="mb-3 col-6">
                                <label for="hipoperGlu" class="form-label fs-4">Glucosa administrada</label>
                                <input type="number" class="form-control" name="hipoperGlu" id="hipoperGlu" aria-describedby="helpId" placeholder="" min="1"/>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="hipoperHora" class="form-label fs-4">Hora</label>
                                <input type="time" class="form-control" name="hipoperHora" id="hipoperHora" aria-describedby="helpId" placeholder="" min="1"/>
                            </div>
                            <div id="hiperAG" class="d-none col-6 mb-3">
                                <label for="correcion" class="form-label fs-4">Correccion</label>
                                <input type="number" class="form-control" name="correccion" id="correccion" aria-describedby="helpId" placeholder="" min="1"/>                                
                            </div>
                        </div>
                        <button type="submit" class="btn btn-secondary btn-md">Añadir</button>
                    </form>
                </div>
            </div>
            <script src="../functions/js/toggleOptions.js"></script>
        </div>
    </body>
</html>
