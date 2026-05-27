<?php
require_once 'val.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Multas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 flex-column">
    <div class="login-card shadow-lg p-4 p-md-5" style="max-width: 750px;">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Registro de Multas</h2>
            <p class="text-muted">Captura la información de la multa.</p>
        </div>
        <form action="entidades/IMulta.php" method="post">
            <div class="row g-3 mb-3">
                <div class="col-md-4">
                    <label class="form-label">ID Multa</label>
                    <input type="text" class="form-control custom-input" name="idmulta" id="idmulta">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Fecha</label>
                    <input type="date" class="form-control custom-input" name="fecha" id="fecha">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Hora</label>
                    <input type="time" class="form-control custom-input" name="hora" id="hora">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Folio</label>
                    <input type="text" class="form-control custom-input" name="folio">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Reporte Sección</label>
                    <input type="text" class="form-control custom-input" name="reporteseccion">
                </div>
                <div class="col-md-4">
                    <label class="form-label">ID Tarjeta de Circulación</label>
                    <input type="text" class="form-control custom-input" name="idtarjetacirculacion">
                </div>
                <div class="col-md-4">
                    <label class="form-label">ID Licencia</label>
                    <input type="text" class="form-control custom-input" name="idlicencia">
                </div>
                <div class="col-md-4">
                    <label class="form-label">ID Agente</label>
                    <input type="text" class="form-control custom-input" name="idagente">
                </div>
                <div class="col-md-4">
                    <label class="form-label">ID Pago</label>
                    <input type="text" class="form-control custom-input" name="idpago">
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100 btn-login fw-bold">Enviar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>