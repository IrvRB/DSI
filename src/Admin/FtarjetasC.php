<?php
require_once 'val.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Tarjetas de Circulación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 flex-column">
    <div class="login-card shadow-lg p-4 p-md-5" style="max-width: 900px;">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Tarjetas de Circulación</h2>
            <p class="text-muted">Registro de tarjeta de circulación.</p>
        </div>
        <form action="entidades/ITarjetaC.php" method="get">
            <div class="row g-3 mb-3">
                <div class="col-md-4">
                    <label class="form-label">ID Tarjeta</label>
                    <input type="number" class="form-control custom-input" name="idtarjetaC" id="idtarjetaC">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Vigencia</label>
                    <input type="text" class="form-control custom-input" name="vigencia" id="vigencia">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Folio</label>
                    <input type="text" class="form-control custom-input" name="folio" id="folio">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Uso</label>
                    <input type="text" class="form-control custom-input" name="uso" id="uso">
                </div>
                <div class="col-md-4">
                    <label class="form-label">RPA</label>
                    <input type="text" class="form-control custom-input" name="rpa" id="rpa">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Firma Aut.</label>
                    <input type="text" class="form-control custom-input" name="firmaaut" id="firmaaut">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Fecha Exp.</label>
                    <input type="date" class="form-control custom-input" name="fechaexp" id="fechaexp">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Tipo Servicio</label>
                    <input type="text" class="form-control custom-input" name="tiposervicio" id="tiposervicio">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Holograma</label>
                    <input type="text" class="form-control custom-input" name="holograma" id="holograma">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Número de Serie</label>
                    <input type="text" class="form-control custom-input" name="numserie" id="numserie">
                </div>
                <div class="col-md-4">
                    <label class="form-label">ID Propietario</label>
                    <input type="number" class="form-control custom-input" name="idpropietario" id="idpropietario">
                </div>
                <div class="col-md-4">
                    <label class="form-label">ID Pago</label>
                    <input type="number" class="form-control custom-input" name="idpago" id="idpago">
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100 btn-login fw-bold">Registrar Tarjeta</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>