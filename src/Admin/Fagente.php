<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Agentes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 flex-column">
    <div class="login-card shadow-lg p-4 p-md-5" style="max-width: 650px;">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Registro de Agentes</h2>
            <p class="text-muted">Agrega un nuevo agente al sistema de Control Vehicular.</p>
        </div>
        <form action="entidades/IAgente.php" method="get">
            <div class="mb-3">
                <label for="idAgente" class="form-label">ID Agente</label>
                <input type="text" class="form-control custom-input" id="idAgente" name="idAgente" placeholder="Ej: AG-102" required>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre Completo</label>
                <input type="text" class="form-control custom-input" id="nombre" name="nombre" placeholder="Ingrese nombre del oficial" required>
            </div>
            <div class="mb-4">
                <label for="asignacion" class="form-label">Asignación / Zona</label>
                <input type="text" class="form-control custom-input" id="asignacion" name="asignacion" placeholder="Ej: Sector Norte" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 btn-login fw-bold">Guardar Agente</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>