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
<<<<<<< HEAD
    <style>
        body { background-color: #e9ecef; }
        .card { border-radius: 1rem; border: none; }
        .header-custom { 
            background: #0d6efd; 
            color: white; 
            border-radius: 1rem 1rem 0 0; 
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="card shadow">
                <div class="header-custom text-center">
                    <h2 class="mb-0">Tarjetas de Verificación</h2>
                    <small>Sistema de Control Vehicular</small>
                </div>
                <div class="card-body p-4">
                    <form action="entidades/ITarjetaV.php" method="get">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="IdTarjetaV" class="form-label fw-semibold">ID Tarjeta de Verificación</label>
                                <input type="text" class="form-control" name="IdTarjetaV" id="IdTarjetaV" placeholder="Ej. TV-001">
                            </div>

                            <div class="col-md-6">
                                <label for="Num_linea" class="form-label fw-semibold">Número de Línea</label>
                                <input type="text" class="form-control" name="Num_linea" id="Num_linea" placeholder="Línea">
                            </div>

                            <div class="col-md-6">
                                <label for="Vigencia" class="form-label fw-semibold">Vigencia</label>
                                <input type="text" class="form-control" name="Vigencia" id="Vigencia" placeholder="Vigencia">
                            </div>

                            <div class="col-md-6">
                                <label for="Fecha_exp" class="form-label fw-semibold">Fecha de Expiración</label>
                                <input type="date" class="form-control" name="Fecha_exp" id="Fecha_exp">
                            </div>

                            <div class="col-md-6">
                                <label for="Hora_entrada" class="form-label fw-semibold">Hora de Entrada</label>
                                <input type="time" class="form-control" name="Hora_entrada" id="Hora_entrada">
                            </div>

                            <div class="col-md-6">
                                <label for="Hora_salida" class="form-label fw-semibold">Hora de Salida</label>
                                <input type="time" class="form-control" name="Hora_salida" id="Hora_salida">
                            </div>

                            <div class="col-md-4">
                                <label for="Semestre" class="form-label fw-semibold">Semestre</label>
                                <input type="number" class="form-control" name="Semestre" id="Semestre" step="1" placeholder="1">
                            </div>

                            <div class="col-md-8">
                                <label for="Met_analisisV" class="form-label fw-semibold">Método de Análisis</label>
                                <input type="text" class="form-control" name="Met_analisisV" id="Met_analisisV" placeholder="Método">
                            </div>

                            <div class="col-md-4">
                                <label for="IdCentroV" class="form-label fw-semibold">ID Centro de Verificación</label>
                                <input type="number" class="form-control" name="IdCentroV" id="IdCentroV" placeholder="Ej. 901">
                            </div>

                            <div class="col-md-4">
                                <label for="IdTarjetaC" class="form-label fw-semibold">ID Tarjeta de Circulación</label>
                                <input type="number" class="form-control" name="IdTarjetaC" id="IdTarjetaC" placeholder="Ej. 3001">
                            </div>

                            <div class="col-md-4">
                                <label for="IdPago" class="form-label fw-semibold">ID Pago</label>
                                <input type="number" class="form-control" name="IdPago" id="IdPago" placeholder="Ej. 7001">
                            </div>
                        </div>

                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-primary btn-lg">Registrar Tarjeta</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
=======
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
>>>>>>> 3a5837e3efc2adf49289e571f4443194bcb3f48e
</body>
</html>