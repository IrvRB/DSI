<?php
require_once 'val.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Conductores</title>
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
        <div class="col-lg-7">
            <div class="card shadow">
                <div class="header-custom text-center">
                    <h2 class="mb-0">Registro de Conductores</h2>
                    <small>Sistema de Control Vehicular</small>
                </div>
                <div class="card-body p-4">
                    <form action="entidades/IConductor.php" method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="idConductor" class="form-label fw-semibold">ID Conductor</label>
                                <input type="text" class="form-control" name="idConductor" id="idConductor" placeholder="Ej. 1001">
                            </div>

                            <div class="col-md-6">
                                <label for="nombre" class="form-label fw-semibold">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre completo">
                            </div>

                            <div class="col-md-6">
                                <label for="numEmergenica" class="form-label fw-semibold">Número de Emergencia</label>
                                <input type="text" class="form-control" name="numEmergenica" id="numEmergenica" placeholder="Ej. 5512345678">
                            </div>

                            <div class="col-md-6">
                                <label for="idDomicilio" class="form-label fw-semibold">ID Domicilio</label>
                                <input type="text" class="form-control" name="idDomicilio" id="idDomicilio" placeholder="Ej. 12">
                            </div>
                        </div>

                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-primary btn-lg">Guardar Conductor</button>
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
    <div class="login-card shadow-lg p-4 p-md-5" style="max-width: 650px;">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Registro de Conductores</h2>
            <p class="text-muted">Captura los datos del conductor para registrar su ficha.</p>
        </div>
        <form action="entidades/IConductor.php" method="post">
            <div class="mb-3">
                <label for="idConductor" class="form-label">ID Conductor</label>
                <input type="text" class="form-control custom-input" name="idConductor" id="idConductor" required>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control custom-input" name="nombre" id="nombre" required>
            </div>
            <div class="mb-3">
                <label for="numEmergenica" class="form-label">Número de Emergencia</label>
                <input type="text" class="form-control custom-input" name="numEmergenica" id="numEmergenica" required>
            </div>
            <div class="mb-4">
                <label for="idDomicilio" class="form-label">ID Domicilio</label>
                <input type="text" class="form-control custom-input" name="idDomicilio" id="idDomicilio" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 btn-login fw-bold">Enviar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
>>>>>>> 3a5837e3efc2adf49289e571f4443194bcb3f48e
</body>
</html>