<?php
// 1. Iniciar o reanudar sesión
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 2. Si ya está logueado, redirigir según su tipo de cuenta
if (isset($_SESSION['usuario']) && isset($_SESSION['tipo'])) {
    if ($_SESSION['tipo'] === 'A') {
        header("Location: Admin/genKey.php");
    } else {
        header("Location: User/index.php"); // Redirección para usuarios estándar
    }
    exit;
}

$error_message = "";

// Procesar solicitudes POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input_data = json_decode(file_get_contents('php://input'), true);

    $usuarioInput = $input_data['usuario'] ?? ($_POST['usuario'] ?? null);
    $pwdInput = $input_data['password'] ?? ($_POST['password'] ?? null);
    $keyContent = $input_data['keyContent'] ?? ($_POST['keyContent'] ?? null);
    $isAjax = !empty($input_data);

    // Conexión interna con tus datos exactos (Se remueve puerto si usas el alias 'db' de Docker)
    $conn = new mysqli("db", "root", "root", "ControlVehicular2026");

    try {
        if ($conn->connect_error) {
            throw new Exception("Error de conexión a la base de datos.");
        }

        // --- FLUJO A: ACCESO CON ARCHIVO .KEY ---
        if (!empty($keyContent)) {
            $tokenLlave = trim($keyContent);

            // Buscamos al usuario por el token de su llave (asumiendo la columna 'llave_token')
            $stmt = $conn->prepare("SELECT usuario, tipo, bloqueo, estado FROM Cuentas WHERE llave_token = ? LIMIT 1");
            $stmt->bind_param("s", $tokenLlave);
            $stmt->execute();
            $cuenta = $stmt->get_result()->fetch_assoc();
            $stmt->close();

            if ($cuenta) {
                if ($cuenta['bloqueo'] == 1)
                    throw new Exception('Tu cuenta se encuentra bloqueada.');
                if ($cuenta['estado'] == 0)
                    throw new Exception('Tu cuenta se encuentra inactiva.');

                $_SESSION['usuario'] = $cuenta['usuario'];
                $_SESSION['tipo'] = $cuenta['tipo'];

                // Determinar ruta de redirección en Ajax
                $redirect_to = ($cuenta['tipo'] === 'A') ? 'Admin/genKey.php' : 'User/index.php';

                if ($isAjax) {
                    header('Content-Type: application/json');
                    echo json_encode(['status' => 'success', 'redirect' => $redirect_to]);
                    exit;
                }
            } else {
                throw new Exception('El archivo .key no corresponde a ninguna cuenta activa.');
            }
        }
        // --- FLUJO B: ACCESO TRADICIONAL USUARIO/CONTRASEÑA ---
        elseif (!empty($usuarioInput) && !empty($pwdInput)) {
            $userClean = trim($usuarioInput);
            $passClean = trim($pwdInput);

            // Consulta para verificar usuario y contraseña en texto plano
            $stmt = $conn->prepare("SELECT usuario, pwd, tipo, bloqueo, estado FROM Cuentas WHERE usuario = ? LIMIT 1");
            $stmt->bind_param("s", $userClean);
            $stmt->execute();
            $cuenta = $stmt->get_result()->fetch_assoc();
            $stmt->close();

            // Comparación directa de cadenas (según tus INSERTS actuales)
            if ($cuenta && $passClean === $cuenta['pwd']) {
                if ($cuenta['bloqueo'] == 1)
                    throw new Exception('Tu cuenta se encuentra bloqueada.');
                if ($cuenta['estado'] == 0)
                    throw new Exception('Tu cuenta se encuentra inactiva.');

                $_SESSION['usuario'] = $cuenta['usuario'];
                $_SESSION['tipo'] = $cuenta['tipo'];

                // Redirección del flujo clásico POST
                if ($cuenta['tipo'] === 'A') {
                    header("Location: Admin/index.php");
                } else {
                    header("Location: User/index.php");
                }
                exit;
            } else {
                throw new Exception('Usuario o contraseña incorrectos.');
            }
        } else {
            throw new Exception('Por favor, rellena todos los campos.');
        }

    } catch (Exception $e) {
        if ($isAjax) {
            header('Content-Type: application/json');
            http_response_code(401);
            echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
            exit;
        } else {
            $error_message = $e->getMessage();
        }
    } finally {
        if (isset($conn) && $conn)
            $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body class="d-flex align-items-center justify-content-center vh-100 flex-column">

    <div id="alertContainer" class="w-100 mb-3" style="max-width: 450px;">
        <?php if (!empty($error_message)): ?>
            <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert" style="border-radius: 12px;">
                <strong>Error:</strong> <?php echo htmlspecialchars($error_message); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
    </div>

    <div class="login-card shadow-lg p-4 p-md-5">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Bienvenido</h2>
            <p class="text-muted">Control Vehicular 2026</p>
        </div>

        <form action="login.php" method="post">
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control custom-input" id="usuario" name="usuario"
                    placeholder="Nombre de usuario" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control custom-input" id="password" name="password"
                    placeholder="Contraseña" required>
            </div>

            <div class="d-flex justify-content-between mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember">
                    <label class="form-check-label text-muted" for="remember">Recuérdame</label>
                </div>
                <a href="#" class="text-decoration-none small">¿Olvidaste tu contraseña?</a>
            </div>

            <button type="submit" class="btn btn-primary w-100 btn-login fw-bold">Iniciar Sesión</button>
        </form>

        <div class="text-center my-3 text-muted">
            <small>— O —</small>
        </div>

        <div class="d-grid">
            <input type="file" id="keyFile" accept=".key" style="display: none;" onchange="handleFileSelect(this)">

            <button type="button"
                class="btn btn-outline-secondary d-flex align-items-center justify-content-center gap-2"
                onclick="document.getElementById('keyFile').click()">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key"
                    viewBox="0 0 16 16">
                    <path
                        d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 7.465 10H7a.5.5 0 0 1-.5-.5c0-.13.016-.257.046-.38A4.002 4.002 0 0 1 0 8m4-3a3 3 0 1 0 0 6 3 3 0 0 0 0-6" />
                </svg>
                Acceder con Llave (.key)
            </button>
            <div id="fileNameDisplay" class="text-center mt-2 small text-primary" style="display:none;"></div>
        </div>
    </div>

    <script>
        function showAlert(message, type = 'danger') {
            const container = document.getElementById('alertContainer');
            container.innerHTML = `
                <div class="alert alert-${type} alert-dismissible fade show shadow-sm" role="alert" style="border-radius: 12px;">
                    <strong>${type === 'danger' ? 'Error:' : 'Éxito:'}</strong> ${message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            `;
        }

        function handleFileSelect(input) {
            const file = input.files[0];
            const display = document.getElementById('fileNameDisplay');

            if (file) {
                display.innerText = `Archivo seleccionado: ${file.name}`;
                display.style.display = 'block';

                const reader = new FileReader();
                reader.onload = async function (e) {
                    const content = e.target.result;

                    try {
                        const response = await fetch('login.php', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify({
                                keyContent: content
                            })
                        });

                        const data = await response.json();

                        if (response.ok && data.status === 'success') {
                            showAlert('Llave correcta. Redirigiendo...', 'success');
                            setTimeout(() => {
                                window.location.href = data.redirect;
                            }, 1000);
                        } else {
                            showAlert(data.message || 'Error al validar la llave.');
                        }
                    } catch (err) {
                        console.error(err);
                        showAlert('Error en la conexión con el servidor.');
                    }
                };
                reader.readAsText(file);
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>