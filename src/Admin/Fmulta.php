<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Multas</title>
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
                    <h2 class="mb-0">Registro de Multas</h2>
                    <small>Sistema de Control Vehicular</small>
                </div>
                <div class="card-body p-4">
                    <form action="entidades/IMulta.php" method="post">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="idmulta" class="form-label fw-semibold">ID Multa</label>
                                <input type="text" class="form-control" name="idmulta" id="idmulta" placeholder="Ej. 5001">
                            </div>

                            <div class="col-md-4">
                                <label for="fecha" class="form-label fw-semibold">Fecha</label>
                                <input type="text" class="form-control" name="fecha" id="fecha" placeholder="YYYY-MM-DD">
                            </div>

                            <div class="col-md-4">
                                <label for="hora" class="form-label fw-semibold">Hora</label>
                                <input type="text" class="form-control" name="hora" id="hora" placeholder="HH:MM">
                            </div>

                            <div class="col-md-6">
                                <label for="folio" class="form-label fw-semibold">Folio</label>
                                <input type="text" class="form-control" name="folio" id="folio" placeholder="Folio de la multa">
                            </div>

                            <div class="col-md-6">
                                <label for="reporteseccion" class="form-label fw-semibold">Reporte Sección</label>
                                <input type="text" class="form-control" name="reporteseccion" id="reporteseccion" placeholder="Sección reportada">
                            </div>

                            <div class="col-md-6">
                                <label for="idTarjetaC" class="form-label fw-semibold">ID Tarjeta de Circulación</label>
                                <input type="text" class="form-control" name="idTarjetaC" id="idTarjetaC" placeholder="Ej. 3001">
                            </div>

                            <div class="col-md-6">
                                <label for="idlicencia" class="form-label fw-semibold">ID Licencia</label>
                                <input type="text" class="form-control" name="idlicencia" id="idlicencia" placeholder="Ej. 4001">
                            </div>

                            <div class="col-md-6">
                                <label for="idagente" class="form-label fw-semibold">ID Agente</label>
                                <input type="text" class="form-control" name="idagente" id="idagente" placeholder="Ej. AG-102">
                            </div>

                            <div class="col-md-6">
                                <label for="idpago" class="form-label fw-semibold">ID Pago</label>
                                <input type="text" class="form-control" name="idpago" id="idpago" placeholder="Ej. 7001">
                            </div>
                        </div>

                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-primary btn-lg">Guardar Multa</button>
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
>>>>>>> 3a5837e3efc2adf49289e571f4443194bcb3f48e
</body>
</html>