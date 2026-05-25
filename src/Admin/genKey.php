<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['usuario']) || $_SESSION['tipo'] !== 'A') {
    header("Location: ../login.php");
    exit;
}

$conn = new mysqli("db", "root", "root", "ControlVehicular2026");

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

$error_message = "";
$success_message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['usuario_key'])) {
    $usuarioTarget = trim($_POST['usuario_key']);

    try {
        if (empty($usuarioTarget)) {
            throw new Exception("Por favor, seleccione un usuario válido.");
        }

        $tokenUnico = bin2hex(random_bytes(32));
        $stmt = $conn->prepare("UPDATE Cuentas SET llave_token = ? WHERE usuario = ?");
        $stmt->bind_param("ss", $tokenUnico, $usuarioTarget);

        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                $stmt->close();
                $conn->close();

                $nombreArchivo = "llave_acceso_" . $usuarioTarget . ".key";

                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename="' . $nombreArchivo . '"');
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . strlen($tokenUnico));

                // Imprimir el token dentro del archivo de texto descargado
                echo $tokenUnico;
                exit; // Detener la ejecución para que el HTML no se mezcle en el archivo .key
            } else {
                throw new Exception("El usuario '$usuarioTarget' no existe o no requirió cambios.");
            }
        } else {
            throw new Exception("Error al ejecutar el cambio en la base de datos.");
        }

    } catch (Exception $e) {
        $error_message = $e->getMessage();
    }
}

// 4. LEER TODOS LOS USUARIOS DISPONIBLES PARA EL FORMULARIO VISUAL
$sql_usuarios = "SELECT usuario, tipo, bloqueo, estado FROM Cuentas ORDER BY usuario ASC";
$resultado_usuarios = $conn->query($sql_usuarios);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Llaves (.key) - Control Vehicular 2026</title>
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

        .card-custom {
            border-radius: 12px;
            border: none;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow-sm mb-4">
        <div class="container-fluid px-4">
            <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="dashboard.php">
                <i class="bi bi-car-front-fill text-info"></i> Control Vehicular 2026
            </a>
            <div class="justify-content-end">
                <div class="d-flex align-items-center gap-3">
                    <a href="dashboard.php" class="btn btn-sm btn-outline-light">
                        <i class="bi bi-arrow-left-short"></i> Volver al Panel
                    </a>
                    <span class="text-white-50 small">
                        <i class="bi bi-shield-lock"></i> Módulo Admin
                    </span>
                </div>
            </div>
        </div>
    </nav>

    <div class="container px-4">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-12">

                <?php if (!empty($error_message)): ?>
                    <div class="alert alert-danger alert-dismissible fade show shadow-sm card-custom" role="alert">
                        <strong><i class="bi bi-exclamation-triangle-fill"></i> Error:</strong>
                        <?php echo htmlspecialchars($error_message); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <div class="card card-custom shadow-sm p-4 mb-4 bg-white">
                    <div class="text-center mb-4">
                        <div class="display-6 text-primary"><i class="bi bi-key-fill"></i></div>
                        <h4 class="fw-bold mt-2">Generar Llave Digital (.key)</h4>
                        <p class="text-muted small">Crea un archivo tokenizado de acceso directo para el usuario
                            seleccionado.</p>
                    </div>

                    <form action="<?php echo htmlspecialchars(basename($_SERVER['PHP_SELF'])); ?>" method="POST">
                        <div class="mb-4">
                            <label for="usuario_key" class="form-label fw-semibold text-secondary">Seleccionar Cuenta de
                                Usuario:</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i
                                        class="bi bi-person-fill text-muted"></i></span>
                                <select name="usuario_key" id="usuario_key" class="form-select bg-light" required>
                                    <option value="" disabled selected>-- Elige un usuario de la lista --</option>
                                    <?php
                                    if ($resultado_usuarios && $resultado_usuarios->num_rows > 0):
                                        while ($user = $resultado_usuarios->fetch_assoc()):
                                            $rol = ($user['tipo'] === 'A') ? 'Admin' : 'Usuario';
                                            ?>
                                            <option value="<?php echo htmlspecialchars($user['usuario']); ?>">
                                                <?php echo htmlspecialchars($user['usuario']) . " (Rol: " . $rol . ")"; ?>
                                            </option>
                                            <?php
                                            unset($rol);
                                        endwhile;
                                    endif;
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary fw-bold p-2">
                                <i class="bi bi-download"></i> Generar y Descargar Llave
                            </button>
                        </div>
                    </form>
                </div>



            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
if (isset($conn) && $conn instanceof mysqli && !$conn->connect_error) {
    @$conn->close();
}
?>