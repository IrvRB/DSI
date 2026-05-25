<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Pagos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 flex-column">
    <div class="login-card shadow-lg p-4 p-md-5" style="max-width: 650px;">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Registro de Pagos</h2>
            <p class="text-muted">Ingresa los datos del pago.</p>
        </div>
        <form action="entidades/IPagos.php" method="post">
            <div class="mb-3">
                <label class="form-label">ID Pago</label>
                <input type="text" class="form-control custom-input" name="idpago" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control custom-input" name="nombre" required>
            </div>
            <div class="mb-4">
                <label class="form-label">Asignación</label>
                <input type="text" class="form-control custom-input" name="asignacion" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 btn-login fw-bold">Enviar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>