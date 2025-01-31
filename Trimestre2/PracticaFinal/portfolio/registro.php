<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-secondary">
    <div class="container-fluid">
        <div id="login" class="rounded bg-light d-flex flex-column justify-content-center align-item-center mx-auto p-3" style="width: 25rem; margin-top:30vh;">
            <form class="row g-3 needs-validation" autocomplete="off">
                <div class="mb-3 row-12 text-center">
                    <label for="name" class="form-label text-primary">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nombre" required/>
                </div>
                <div class="invalid-feedback">
                    Por favor, introduce tu nombre.
                </div>
                <div class="mb-3 row-12 text-center">
                    <label for="apellidos" class="form-label text-primary">Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos" required/>
                </div>
                <div class="invalid-feedback">
                    Por favor, introduce tus apellidos.
                </div>
                <div class="mb-3 col-6 text-center">
                    <label for="username" class="form-label text-primary">Usuario</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Nombre de Usuario" required/>
                </div>
                <div class="invalid-feedback">
                    Por favor, introduce tu nombre de usuario.
                </div>
                <div class="mb-3 col-6 text-center">
                    <label for="passwd" class="form-label text-primary">Contraseña</label>
                    <input type="password" class="form-control" name="passwd" id="passwd" placeholder="Contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
                </div>
                <div id="message">
                    <h5>Password must contain the following:</h5>
                    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                    <p id="number" class="invalid">A <b>number</b></p>
                    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                </div>
                <div class="invalid-feedback">
                    Por favor, introduce tu contraseña.
                </div>
                <div class="mb-3 row-12 text-center">
                    <label for="fechaNac" class="form-label text-primary">Fecha de Nacimiento</label>
                    <input type="date" name="fechaNac" id="fechaNac">
                </div>
                <div class="invalid-feedback">
                    Por favor, introduce tu fecha de nacimiento.
                </div>
                <button type="submit" class="btn btn-primary btn-md">Registrarse</button>
            </form>
        </div>
    </div>
</body>
</html>