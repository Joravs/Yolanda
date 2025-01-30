<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div id="login" class="d-flex flex-column justify-content-center align-item-center">
            <div class="mb-3 row-12 text-center">
                <label for="username" class="form-label text-info">Usuario</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username"/>
            </div>
            <div class="mb-3 row-12 text-center">
                <label for="passwd" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="passwd" id="passwd" placeholder="Password"/>
            </div>
        </div>
    </div>
</body>
</html>