<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Propietarios</title>
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
        <div class="col-lg-7">
            <div class="card shadow">
                <div class="header-custom text-center">
                    <h2 class="mb-0">Registro de Propietarios</h2>
                    <small>Sistema de Control Vehicular</small>
                </div>
                <div class="card-body p-4">
                    <form action="entidades/IPropietario.php" method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="Idpropietario" class="form-label fw-semibold">ID Propietario</label>
                                <input type="text" class="form-control" name="Idpropietario" id="Idpropietario" placeholder="Ej. 2001">
                            </div>

                            <div class="col-md-6">
                                <label for="Nombre" class="form-label fw-semibold">Nombre</label>
                                <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Nombre completo">
                            </div>

                            <div class="col-md-6">
                                <label for="RFC" class="form-label fw-semibold">RFC</label>
                                <input type="text" class="form-control" name="RFC" id="RFC" placeholder="RFC del propietario">
                            </div>

                            <div class="col-md-6">
                                <label for="Iddomicilio" class="form-label fw-semibold">ID Domicilio</label>
                                <input type="text" class="form-control" name="Iddomicilio" id="Iddomicilio" placeholder="Ej. 12">
                            </div>
                        </div>

                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-primary btn-lg">Guardar Propietario</button>
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