<?php
require_once 'val.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Centros de Verificación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 flex-column">
    <div class="login-card shadow-lg p-4 p-md-5" style="max-width: 900px;">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Centros de Verificación</h2>
            <p class="text-muted">Registro de centro de verificación.</p>
        </div>
        <form action="entidades/ICentrosV.php" method="post">
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label for="IdCentroV" class="form-label">ID del Centro</label>
                    <input type="number" class="form-control custom-input" name="IdCentroV" id="IdCentroV" placeholder="Auto-incremental">
                </div>
                <div class="col-md-6">
                    <label for="Numero" class="form-label">Número</label>
                    <input type="text" class="form-control custom-input" name="Numero" id="Numero" placeholder="Ej: CV-05">
                </div>
                <div class="col-12">
                    <label for="Nombre" class="form-label">Nombre del Establecimiento</label>
                    <input type="text" class="form-control custom-input" name="Nombre" id="Nombre" placeholder="Verificentro de Querétaro S.A.">
                </div>
                <div class="col-12">
                    <label for="Direccion" class="form-label">Dirección Completa</label>
                    <input type="text" class="form-control custom-input" name="Direccion" id="Direccion" placeholder="Calle, número, colonia y municipio">
                </div>
                <div class="col-md-6">
                    <label for="Num_lineas" class="form-label">Número de Líneas</label>
                    <input type="number" class="form-control custom-input" name="Num_lineas" id="Num_lineas" min="1" placeholder="Líneas de servicio">
                </div>
                <div class="col-md-6">
                    <label for="Horario" class="form-label">Horario de Atención</label>
                    <input type="text" class="form-control custom-input" name="Horario" id="Horario" placeholder="08:00:00">
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100 btn-login fw-bold">Registrar Centro</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>