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
        <div id="login" class="rounded bg-light d-flex flex-column justify-content-center align-item-center mx-auto p-4" style="width: 22rem; margin-top:35vh;">
            <div class="mb-3 row-12 text-center">
                <label for="username" class="form-label text-primary">Usuario</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username"/>
            </div>
            <div class="mb-3 row-12 text-center">
                <label for="passwd" class="form-label text-primary">Contraseña</label>
                <input type="password" class="form-control" name="passwd" id="passwd" placeholder="Password"/>
            </div>
            <button type="submit" class="btn btn-primary btn-md">Iniciar Sesion</button>
        </div>
    </div>
</body>
</html>