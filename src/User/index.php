<?php
// 1. Validar y proteger la sesión
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Si no existe la sesión del usuario, se redirige al login en la carpeta superior
if (!isset($_SESSION['usuario'])) {
    header("Location: ../login.php"); // Sube un nivel correctamente para hallar login.php
    exit;
}

// 2. Conexión a la base de datos (Se mantiene el alias 'db' de Docker)
$conn = new mysqli("db", "root", "root", "ControlVehicular2026");

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// 3. Mapeo y definición de las entidades disponibles
$tablas = [
    'propietarios' => 'Propietarios',
    'domicilios' => 'Domicilios',
    'conductores' => 'Conductores',
    'licencias' => 'Licencias',
    'multas' => 'Multas',
    'agentes' => 'Agentes',
    'vehiculos' => 'Vehículos',
    'centroV' => 'Centros de Verificación',
    'tarjetasC' => 'Tarjetas de Circulación',
    'tarjetasV' => 'Tarjetas de Verificación',
    'pagos' => 'Pagos',
    'Cuentas' => 'Cuentas de Usuario'
];

// Determinar la tabla activa actual
$tab_activa = isset($_GET['tab']) && array_key_exists($_GET['tab'], $tablas) ? $_GET['tab'] : 'propietarios';
$busqueda = isset($_GET['buscar']) ? trim($_GET['buscar']) : '';

// 4. Construcción de la consulta SQL con filtrado dinámico (Buscador)
$sql = "SELECT * FROM `" . $conn->real_escape_string($tab_activa) . "`";

if ($busqueda !== '') {
    $columnas_res = $conn->query("SHOW COLUMNS FROM `$tab_activa`");
    $where_clauses = [];
    while ($col = $columnas_res->fetch_assoc()) {
        $where_clauses[] = "`" . $col['Field'] . "` LIKE '%" . $conn->real_escape_string($busqueda) . "%'";
    }
    if (!empty($where_clauses)) {
        $sql .= " WHERE " . implode(" OR ", $where_clauses);
    }
}

$resultado = $conn->query($sql);

// Guardamos el nombre del archivo actual para evitar hardcodear rutas relativas erróneas
$pagina_actual = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Usuario - Control Vehicular 2026</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }

        .navbar-custom {
            background-color: #1e293b;
        }

        .nav-tabs .nav-link {
            color: #475569;
            font-weight: 500;
            border: none;
            padding: 10px 15px;
        }

        .nav-tabs .nav-link.active {
            color: #0284c7;
            border-bottom: 3px solid #0284c7;
            background-color: transparent;
        }

        .card-table {
            border-radius: 12px;
            border: none;
        }

        .table th {
            background-color: #f1f5f9;
            color: #334155;
            font-weight: 600;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow-sm mb-4">
        <div class="container-fluid px-4">
            <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="#">
                <i class="bi bi-car-front-fill text-info"></i> Control Vehicular 2026
            </a>
            <button class="navbar-toggler text-white border-0 bg-transparent" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <i class="bi bi-list fs-3"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <div class="d-flex align-items-center gap-3 mt-3 mt-lg-0">
                    <span class="text-white-50 small">
                        <i class="bi bi-person-circle"></i> Bienvenido,
                        <strong><?php echo htmlspecialchars($_SESSION['usuario']); ?></strong>
                        (<span
                            class="badge bg-secondary"><?php echo $_SESSION['tipo'] === 'A' ? 'Admin' : 'Usuario'; ?></span>)
                    </span>
                    <a href="../logout.php" class="btn btn-sm btn-outline-danger d-flex align-items-center gap-1">
                        <i class="bi bi-box-arrow-right"></i> Salir
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-12 mb-3">
                <div class="card shadow-sm p-3 bg-white" style="border-radius: 10px;">
                    <form method="GET" action="<?php echo $pagina_actual; ?>" class="row g-2 align-items-center">
                        <input type="hidden" name="tab" value="<?php echo htmlspecialchars($tab_activa); ?>">

                        <div class="col-md-8 col-sm-12">
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0"><i
                                        class="bi bi-search text-muted"></i></span>
                                <input type="text" name="buscar" class="form-control bg-light border-start-0"
                                    placeholder="Buscar coincidencia en <?php echo $tablas[$tab_activa]; ?>..."
                                    value="<?php echo htmlspecialchars($busqueda); ?>">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 d-grid d-md-flex gap-2">
                            <button type="submit" class="btn btn-primary px-4">Buscar</button>
                            <?php if ($busqueda !== ''): ?>
                                <a href="<?php echo $pagina_actual; ?>?tab=<?php echo urlencode($tab_activa); ?>"
                                    class="btn btn-outline-secondary">Limpiar</a>
                            <?php endif; ?>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-12 mb-4">
                <ul class="nav nav-tabs overflow-x-auto flex-nowrap border-bottom">
                    <?php foreach ($tablas as $key => $nombre): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($tab_activa === $key) ? 'active' : ''; ?>"
                                href="<?php echo $pagina_actual; ?>?tab=<?php echo urlencode($key); ?>">
                                <?php echo $nombre; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="col-12">
                <div class="card card-table shadow-sm mb-5">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <?php if ($resultado && $resultado->num_rows > 0): ?>
                                <table class="table table-hover align-middle mb-0 px-3">
                                    <thead>
                                        <tr>
                                            <?php
                                            $campos = $resultado->fetch_fields();
                                            foreach ($campos as $campo): ?>
                                                <th class="p-3 text-uppercase small text-secondary">
                                                    <?php echo htmlspecialchars($campo->name); ?>
                                                </th>
                                            <?php endforeach; ?>
                                            <?php if (in_array($tab_activa, ['multas', 'licencias', 'tarjetasC'])): ?>
                                                <th class="p-3 text-uppercase small text-secondary text-center">Acciones</th>
                                            <?php endif; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $resultado->data_seek(0);
                                        while ($fila = $resultado->fetch_assoc()): ?>
                                            <tr>
                                                <?php foreach ($fila as $columna_nombre => $valor): ?>
                                                    <td class="p-3 text-dark">
                                                        <?php
                                                        if ($valor === null) {
                                                            echo '<em class="text-muted text-opacity-50">null</em>';
                                                        } elseif (in_array($columna_nombre, ['bloqueo', 'estado']) && ($valor === '1' || $valor === '0' || is_bool($valor))) {
                                                            if ($valor == '1')
                                                                echo '<span class="badge bg-success-subtle text-success">Activo / Sí</span>';
                                                            else
                                                                echo '<span class="badge bg-danger-subtle text-danger">Inactivo / No</span>';
                                                        } else {
                                                            echo htmlspecialchars($valor);
                                                        }
                                                        ?>
                                                    </td>
                                                <?php endforeach; ?>

                                                <?php if ($tab_activa === 'multas'): ?>
                                                    <td class="text-center">
                                                        <form action="../multa.php" method="POST" target="_blank">
                                                            <input type="hidden" name="idMulta"
                                                                value="<?php echo $fila['idMulta']; ?>">
                                                            <button type="submit" class="btn btn-sm btn-outline-primary py-0 px-2">
                                                                <i class="bi bi-file-earmark-pdf"></i> PDF
                                                            </button>
                                                        </form>
                                                    </td>
                                                <?php elseif ($tab_activa === 'licencias'): ?>
                                                    <td class="text-center">
                                                        <form action="../licencia.php" method="POST" target="_blank">
                                                            <input type="hidden" name="idLicencia"
                                                                value="<?php echo $fila['idLicencia']; ?>">
                                                            <button type="submit" class="btn btn-sm btn-outline-primary py-0 px-2">
                                                                <i class="bi bi-card-list"></i> Ver
                                                            </button>
                                                        </form>
                                                    </td>
                                                <?php elseif ($tab_activa === 'tarjetasC'): ?>
                                                    <td class="text-center">
                                                        <form action="../generarTarjeta.php" method="POST" target="_blank">
                                                            <input type="hidden" name="idTarjetaC"
                                                                value="<?php echo $fila['idTarjetaC']; ?>">
                                                            <button type="submit" class="btn btn-sm btn-outline-primary py-0 px-2">
                                                                <i class="bi bi-credit-card-2-front"></i> Imprimir
                                                            </button>
                                                        </form>
                                                    </td>
                                                <?php endif; ?>
                                            </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                            <?php else: ?>
                                <div class="text-center py-5">
                                    <i class="bi bi-folder-x text-muted display-3"></i>
                                    <p class="text-muted mt-3 fs-5">No se encontraron registros en la tabla
                                        <strong><?php echo $tablas[$tab_activa]; ?></strong>.
                                    </p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
$conn->close();
?>