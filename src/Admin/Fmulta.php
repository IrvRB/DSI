<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Multas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
</body>
</html>