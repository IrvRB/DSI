
<?php
require_once 'val.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Vehículos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 flex-column">
    <div class="login-card shadow-lg p-4 p-md-5" style="max-width: 750px;">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Registro de Vehículos</h2>
            <p class="text-muted">Captura los datos básicos del vehículo.</p>
        </div>
        <form action="entidades/IVehiculo.php" method="post">
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label class="form-label">Número de Serie</label>
                    <input type="text" class="form-control custom-input" name="numSerie" id="NumSerie">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Marca</label>
                    <input type="text" class="form-control custom-input" name="marca" id="marca">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Modelo</label>
                    <input type="text" class="form-control custom-input" name="modelo" id="modelo">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Placa</label>
                    <input type="text" class="form-control custom-input" name="placa" id="placa">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Tipo de Combustible</label>
                    <input type="text" class="form-control custom-input" name="tipoCombustible" id="tipoCombustible">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Color</label>
                    <input type="text" class="form-control custom-input" name="color" id="color">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Número de Motor</label>
                    <input type="text" class="form-control custom-input" name="nummotor" id="nummotor">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Puertas</label>
                    <input type="number" class="form-control custom-input" name="puertas" id="puertas" step="1" min="1">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Cilindros</label>
                    <input type="number" class="form-control custom-input" name="cilindros" id="cilindros" step="1" min="1">
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100 btn-login fw-bold">Enviar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>