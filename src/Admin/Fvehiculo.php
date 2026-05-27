<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Vehículos</title>
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
                    <h2 class="mb-0">Registro de Vehículos</h2>
                    <small>Sistema de Control Vehicular</small>
                </div>
                <div class="card-body p-4">
                    <form action="entidades/IVehiculo.php" method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="NumSerie" class="form-label fw-semibold">Número de Serie</label>
                                <input type="text" class="form-control" name="numSerie" id="NumSerie" placeholder="Ej. NBS-123456">
                            </div>

                            <div class="col-md-6">
                                <label for="marca" class="form-label fw-semibold">Marca</label>
                                <input type="text" class="form-control" name="marca" id="marca" placeholder="Marca del vehículo">
                            </div>

                            <div class="col-md-6">
                                <label for="modelo" class="form-label fw-semibold">Modelo</label>
                                <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Modelo">
                            </div>

                            <div class="col-md-6">
                                <label for="placa" class="form-label fw-semibold">Placa</label>
                                <input type="text" class="form-control" name="placa" id="placa" placeholder="Placa">
                            </div>

                            <div class="col-md-6">
                                <label for="tipoCombustible" class="form-label fw-semibold">Tipo de Combustible</label>
                                <input type="text" class="form-control" name="tipoCombustible" id="tipoCombustible" placeholder="Gasolina, diésel, eléctrico">
                            </div>

                            <div class="col-md-6">
                                <label for="color" class="form-label fw-semibold">Color</label>
                                <input type="text" class="form-control" name="color" id="color" placeholder="Color del vehículo">
                            </div>

                            <div class="col-md-6">
                                <label for="nummotor" class="form-label fw-semibold">Número de Motor</label>
                                <input type="text" class="form-control" name="nummotor" id="nummotor" placeholder="Número de motor">
                            </div>

                            <div class="col-md-3">
                                <label for="puertas" class="form-label fw-semibold">Puertas</label>
                                <input type="number" class="form-control" name="puertas" id="puertas" step="1" placeholder="4">
                            </div>

                            <div class="col-md-3">
                                <label for="cilindros" class="form-label fw-semibold">Cilindros</label>
                                <input type="number" class="form-control" name="cilindros" id="cilindros" step="1" placeholder="4">
                            </div>
                        </div>

                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-primary btn-lg">Guardar Vehículo</button>
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