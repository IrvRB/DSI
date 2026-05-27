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
                    <h2 class="mb-0">Tarjetas de Circulación</h2>
                    <small>Sistema de Control Vehicular</small>
                </div>
                <div class="card-body p-4">
                    <form action="entidades/ITarjetaC.php" method="get">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="idtarjetaC" class="form-label fw-semibold">ID Tarjeta</label>
                                <input type="number" class="form-control" name="idtarjetaC" id="idtarjetaC" placeholder="Ej. 3001">
                            </div>

                            <div class="col-md-6">
                                <label for="vigencia" class="form-label fw-semibold">Vigencia</label>
                                <input type="text" class="form-control" name="vigencia" id="vigencia" placeholder="Año de vigencia">
                            </div>

                            <div class="col-md-6">
                                <label for="folio" class="form-label fw-semibold">Folio</label>
                                <input type="text" class="form-control" name="folio" id="folio" placeholder="Folio de la tarjeta">
                            </div>

                            <div class="col-md-6">
                                <label for="uso" class="form-label fw-semibold">Uso</label>
                                <input type="text" class="form-control" name="uso" id="uso" placeholder="Uso del vehículo">
                            </div>

                            <div class="col-md-6">
                                <label for="rpa" class="form-label fw-semibold">RPA</label>
                                <input type="text" class="form-control" name="rpa" id="rpa" placeholder="RPA">
                            </div>

                            <div class="col-md-6">
                                <label for="firmaaut" class="form-label fw-semibold">Firma Autor</label>
                                <input type="text" class="form-control" name="firmaaut" id="firmaaut" placeholder="Firma autorizada">
                            </div>

                            <div class="col-md-6">
                                <label for="fechaexp" class="form-label fw-semibold">Fecha de Expiración</label>
                                <input type="date" class="form-control" name="fechaexp" id="fechaexp">
                            </div>

                            <div class="col-md-6">
                                <label for="tiposervicio" class="form-label fw-semibold">Tipo de Servicio</label>
                                <input type="text" class="form-control" name="tiposervicio" id="tiposervicio" placeholder="Tipo de servicio">
                            </div>

                            <div class="col-md-6">
                                <label for="holograma" class="form-label fw-semibold">Holograma</label>
                                <input type="text" class="form-control" name="holograma" id="holograma" placeholder="Holograma">
                            </div>

                            <div class="col-md-6">
                                <label for="numserie" class="form-label fw-semibold">Número de Serie</label>
                                <input type="text" class="form-control" name="numserie" id="numserie" placeholder="Número de serie">
                            </div>

                            <div class="col-md-6">
                                <label for="idpropietario" class="form-label fw-semibold">ID Propietario</label>
                                <input type="number" class="form-control" name="idpropietario" id="idpropietario" placeholder="Ej. 2001">
                            </div>

                            <div class="col-md-6">
                                <label for="idpago" class="form-label fw-semibold">ID Pago</label>
                                <input type="number" class="form-control" name="idpago" id="idpago" placeholder="Ej. 7001">
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
</body>
</html>