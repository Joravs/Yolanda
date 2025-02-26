<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Administracion de Insulina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../favicon.webp" type="image/webp">
</head>
<body>
    <div class="container-fluid font-ratushy">
    <?php
        require_once "../functions/bd/ctdb.php";

        $select=$conn->query("SELECT username FROM usuario");
        $usuarios=$select;
        
        if($usuarios->num_rows > 0){
            echo "<input class='d-none' id='nombresUsuarios' value='";
            while($row=$usuarios->fetch_assoc()){
                echo  $row['username'].",";
            }
            echo "'></input>";
        }
    ?>
        <div id="form" class="rounded d-flex flex-column justify-content-center align-item-center mx-auto p-3" style="width: 50rem; margin-top:30vh;">
            <form class="row g-3 needs-validation" autocomplete="off" method="post" action="../functions/php/validar.php">
                <div class="mb-3 col-6 text-center">
                    <label for="name" class="form-label text-white fs-5">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nombre" required maxlength="15" required/>
                </div>
                <div class="mb-3 col-6 text-center">
                    <label for="apellidos" class="form-label text-white fs-5">Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos" required maxlength="25" required/>
                </div>
                <div class="mb-3 col-12 text-center">
                    <label for="username" class="form-label text-white fs-5">Usuario</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Nombre de Usuario" required maxlength="15"required/>
                </div>
                <span id="passwordHelpInline0" class="form-text text-white invalid d-none">
                        Nombre de Usuario no disponible
                </span>
                <div class="mb-3 col-6 text-center">
                    <label for="passwd" class="form-label text-white fs-5">Contraseña</label>
                    <input type="password" class="form-control" name="passwd" id="passwd" placeholder="Contraseña" required minlength="8" maxlength="25"required/>
                    <span id="passwordHelpInline1" class="form-text text-white">
                        Debe tener una longitud de 8 a 20 caracteres.
                    </span><br>
                    <span id="passwordHelpInline2" class="form-text text-white">
                        Debe tener una mayuscula.
                    </span><br>
                    <span id="passwordHelpInline3" class="form-text text-white">
                        Debe tener un numero.
                    </span>
                </div>
                <div class="mb-3 col-6 text-center">
                    <label for="passwd-confirm" class="form-label text-white fs-5">Confirmar Contraseña</label>
                    <input type="password" class="form-control" name="passwd-confirm" id="passwd-confirm" placeholder="Confirmar Contraseña" required minlength="8" maxlength="25"required/>
                    <span id="pwd-confirm-feedback" class="d-none invalid">
                        Las contraseñas no coinciden.
                    </span>
                </div>
                <div class="mb-3 row-12 text-center">
                    <label for="fechaNac" class="form-label text-white fs-5">Fecha de Nacimiento</label>
                    <input type="date" name="fechaNac" id="fechaNac" required>
                </div>
                <button name="register" type="submit" class="btn btn-secondary btn-md">Registrarse</button>
            </form>
        </div>
        <script src="../functions/js/validarPwd.js"></script>
        <script src="../functions/js/validarUsuario.js"></script>
    </div>
</body>
</html>