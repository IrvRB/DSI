<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Licencias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 flex-column">
    <div class="login-card shadow-lg p-4 p-md-5" style="max-width: 750px;">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Gestión de Licencias</h2>
            <p class="text-muted">Registro de licencias de conductores.</p>
        </div>
        <form action="entidades/ILicencia.php" method="post">
            <div class="row g-3 mb-3">
                <div class="col-md-4">
                    <label for="idlicencia" class="form-label">ID Licencia</label>
                    <input type="number" class="form-control custom-input" name="idlicencia" id="idlicencia" placeholder="0000">
                </div>
                <div class="col-md-4">
                    <label for="idconductor" class="form-label">ID Conductor</label>
                    <input type="number" class="form-control custom-input" name="idconductor" id="idconductor" placeholder="ID Chofer">
                </div>
                <div class="col-md-4">
                    <label for="tipo" class="form-label">Tipo</label>
                    <select class="form-select custom-input" name="tipo" id="tipo">
                        <option selected>Seleccionar...</option>
                        <option value="A">A - Automovilista</option>
                        <option value="B">B - Servicio Público</option>
                        <option value="C">C - Carga</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="fechaexpedicion" class="form-label">Fecha de Expedición</label>
                    <input type="date" class="form-control custom-input" name="fechaexpedicion" id="fechaexpedicion">
                </div>
                <div class="col-md-6">
                    <label for="fechavencimiento" class="form-label">Fecha de Vencimiento</label>
                    <input type="date" class="form-control custom-input" name="fechavencimiento" id="fechavencimiento">
                </div>
                <div class="col-md-4">
                    <label for="antiguedad" class="form-label">Antigüedad (Años)</label>
                    <input type="number" class="form-control custom-input" name="antiguedad" id="antiguedad" step="1" min="0">
                </div>
                <div class="col-md-8">
                    <label for="restricciones" class="form-label">Restricciones</label>
                    <input type="text" class="form-control custom-input" name="restricciones" id="restricciones" placeholder="Ej: Lentes, Audífonos, Vehículo Automático">
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100 btn-login fw-bold">Registrar Licencia</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>