<?php
require_once 'val.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Domicilio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 flex-column">
    <div class="login-card shadow-lg p-4 p-md-5" style="max-width: 750px;">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Registro de Domicilio</h2>
            <p class="text-muted">Captura la dirección completa del domicilio.</p>
        </div>
        <form action="entidades/IDomicilios.php" method="post">
            <div class="row g-3 mb-3">
                <div class="col-md-4">
                    <label class="form-label">ID Domicilio</label>
                    <input type="text" class="form-control custom-input" name="id_domicilio" placeholder="ID">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Código Postal</label>
                    <input type="text" class="form-control custom-input" name="cp" placeholder="76000">
                </div>
                <div class="col-md-12">
                    <label class="form-label">Calle</label>
                    <input type="text" class="form-control custom-input" name="calle" placeholder="Nombre de la vialidad">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Núm. Exterior</label>
                    <input type="text" class="form-control custom-input" name="num_ext">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Núm. Interior</label>
                    <input type="text" class="form-control custom-input" name="num_int" placeholder="Opcional">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Colonia</label>
                    <input type="text" class="form-control custom-input" name="colonia">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Ciudad</label>
                    <input type="text" class="form-control custom-input" name="ciudad">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Estado</label>
                    <input type="text" class="form-control custom-input" name="estado">
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100 btn-login fw-bold">Guardar Domicilio</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>