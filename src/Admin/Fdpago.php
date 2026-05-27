<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Eliminar Pago</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 flex-column">
    <div class="login-card shadow-lg p-4 p-md-5" style="max-width: 550px;">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Eliminar Pago</h2>
            <p class="text-muted">Introduce el ID del pago que deseas eliminar.</p>
        </div>
        <form action="./delete/dpago.php" method="POST">
            <div class="mb-4">
                <label for="id_pago" class="form-label">ID del Pago</label>
                <input type="text" class="form-control custom-input" id="id_pago" name="id_pago" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 btn-login fw-bold">Eliminar Pago</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
