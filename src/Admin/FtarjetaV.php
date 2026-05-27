<?php
require_once 'val.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Tarjetas de Verificación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 flex-column">
    <div class="login-card shadow-lg p-4 p-md-5" style="max-width: 900px;">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Tarjetas de Verificación</h2>
            <p class="text-muted">Registro de tarjeta de verificación.</p>
        </div>
        <form action="entidades/ITarjetaV.php" method="get">
            <div class="row g-3 mb-3">
                <div class="col-md-4">
                    <label class="form-label">ID Tarjeta V</label>
                    <input type="text" class="form-control custom-input" name="IdTarjetaV">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Número de Línea</label>
                    <input type="text" class="form-control custom-input" name="Num_linea">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Vigencia</label>
                    <input type="text" class="form-control custom-input" name="Vigencia">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Fecha Exp.</label>
                    <input type="date" class="form-control custom-input" name="Fecha_exp">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Hora Entrada</label>
                    <input type="time" class="form-control custom-input" name="Hora_entrada">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Hora Salida</label>
                    <input type="time" class="form-control custom-input" name="Hora_salida">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Semestre</label>
                    <input type="number" class="form-control custom-input" name="Semestre" step="1" min="1">
                </div>
                <div class="col-md-8">
                    <label class="form-label">Método de Análisis</label>
                    <input type="text" class="form-control custom-input" name="Met_analisisV">
                </div>
                <div class="col-md-4">
                    <label class="form-label">ID Centro V</label>
                    <input type="number" class="form-control custom-input" name="IdCentroV">
                </div>
                <div class="col-md-4">
                    <label class="form-label">ID Tarjeta C</label>
                    <input type="number" class="form-control custom-input" name="IdTarjetaC">
                </div>
                <div class="col-md-4">
                    <label class="form-label">ID Pago</label>
                    <input type="number" class="form-control custom-input" name="IdPago">
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100 btn-login fw-bold">Registrar Tarjeta</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>