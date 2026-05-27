
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
=======
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
>>>>>>> 3a5837e3efc2adf49289e571f4443194bcb3f48e
</body>
</html>