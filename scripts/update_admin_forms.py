from pathlib import Path

pages = {
    'src/Admin/Fagente.php': '''<!DOCTYPE html>
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
</html>''',
    'src/Admin/Fconductores.php': '''<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Conductores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
</body>
</html>''',
    'src/Admin/FcentrosV.php': '''<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Centros de Verificación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 flex-column">
    <div class="login-card shadow-lg p-4 p-md-5" style="max-width: 900px;">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Centros de Verificación</h2>
            <p class="text-muted">Registro de centro de verificación.</p>
        </div>
        <form action="entidades/ICentrosV.php" method="post">
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label for="IdCentroV" class="form-label">ID del Centro</label>
                    <input type="number" class="form-control custom-input" name="IdCentroV" id="IdCentroV" placeholder="Auto-incremental">
                </div>
                <div class="col-md-6">
                    <label for="Numero" class="form-label">Número</label>
                    <input type="text" class="form-control custom-input" name="Numero" id="Numero" placeholder="Ej: CV-05">
                </div>
                <div class="col-12">
                    <label for="Nombre" class="form-label">Nombre del Establecimiento</label>
                    <input type="text" class="form-control custom-input" name="Nombre" id="Nombre" placeholder="Verificentro de Querétaro S.A.">
                </div>
                <div class="col-12">
                    <label for="Direccion" class="form-label">Dirección Completa</label>
                    <input type="text" class="form-control custom-input" name="Direccion" id="Direccion" placeholder="Calle, número, colonia y municipio">
                </div>
                <div class="col-md-6">
                    <label for="Num_lineas" class="form-label">Número de Líneas</label>
                    <input type="number" class="form-control custom-input" name="Num_lineas" id="Num_lineas" min="1" placeholder="Líneas de servicio">
                </div>
                <div class="col-md-6">
                    <label for="Horario" class="form-label">Horario de Atención</label>
                    <input type="text" class="form-control custom-input" name="Horario" id="Horario" placeholder="08:00:00">
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100 btn-login fw-bold">Registrar Centro</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>''',
    'src/Admin/Fdagente.php': '''<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Eliminar Agente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 flex-column">
    <div class="login-card shadow-lg p-4 p-md-5" style="max-width: 550px;">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Eliminar Agente</h2>
            <p class="text-muted">Introduce el ID del agente que deseas eliminar.</p>
        </div>
        <form action="./delete/dagente.php" method="POST">
            <div class="mb-4">
                <label for="id_agente" class="form-label">ID del Agente</label>
                <input type="text" class="form-control custom-input" id="id_agente" name="id_agente" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 btn-login fw-bold">Eliminar Agente</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>''',
    'src/Admin/FdDomicilio.php': '''<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Eliminar Domicilio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 flex-column">
    <div class="login-card shadow-lg p-4 p-md-5" style="max-width: 550px;">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Eliminar Domicilio</h2>
            <p class="text-muted">Introduce el ID del domicilio que deseas eliminar.</p>
        </div>
        <form action="./delete/dDomicilio.php" method="POST">
            <div class="mb-4">
                <label for="id_domicilio" class="form-label">ID del Domicilio</label>
                <input type="text" class="form-control custom-input" id="id_domicilio" name="id_domicilio" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 btn-login fw-bold">Eliminar Domicilio</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>''',
    'src/Admin/FDomicilio.php': '''<!DOCTYPE html>
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
</html>''',
    'src/Admin/Flicencias.php': '''<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Licencias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 flex-column">
    <div class="login-card shadow-lg p-4 p-md-5" style="max-width: 750px;">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Gestión de Licencias</h2>
            <p class="text-muted">Registro de licencias de conductores.</p>
        </div>
        <form action="entidades/ILicencia.php" method="post">
            <div class="row g-3 mb-3">
                <div class="col-md-4">
                    <label for="idlicencia" class="form-label">ID Licencia</label>
                    <input type="number" class="form-control custom-input" name="idlicencia" id="idlicencia" placeholder="0000">
                </div>
                <div class="col-md-4">
                    <label for="idconductor" class="form-label">ID Conductor</label>
                    <input type="number" class="form-control custom-input" name="idconductor" id="idconductor" placeholder="ID Chofer">
                </div>
                <div class="col-md-4">
                    <label for="tipo" class="form-label">Tipo</label>
                    <select class="form-select custom-input" name="tipo" id="tipo">
                        <option selected>Seleccionar...</option>
                        <option value="A">A - Automovilista</option>
                        <option value="B">B - Servicio Público</option>
                        <option value="C">C - Carga</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="fechaexpedicion" class="form-label">Fecha de Expedición</label>
                    <input type="date" class="form-control custom-input" name="fechaexpedicion" id="fechaexpedicion">
                </div>
                <div class="col-md-6">
                    <label for="fechavencimiento" class="form-label">Fecha de Vencimiento</label>
                    <input type="date" class="form-control custom-input" name="fechavencimiento" id="fechavencimiento">
                </div>
                <div class="col-md-4">
                    <label for="antiguedad" class="form-label">Antigüedad (Años)</label>
                    <input type="number" class="form-control custom-input" name="antiguedad" id="antiguedad" step="1" min="0">
                </div>
                <div class="col-md-8">
                    <label for="restricciones" class="form-label">Restricciones</label>
                    <input type="text" class="form-control custom-input" name="restricciones" id="restricciones" placeholder="Ej: Lentes, Audífonos, Vehículo Automático">
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100 btn-login fw-bold">Registrar Licencia</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>''',
    'src/Admin/Fmulta.php': '''<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Multas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 flex-column">
    <div class="login-card shadow-lg p-4 p-md-5" style="max-width: 750px;">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Registro de Multas</h2>
            <p class="text-muted">Captura la información de la multa.</p>
        </div>
        <form action="entidades/IMulta.php" method="post">
            <div class="row g-3 mb-3">
                <div class="col-md-4">
                    <label class="form-label">ID Multa</label>
                    <input type="text" class="form-control custom-input" name="idmulta" id="idmulta">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Fecha</label>
                    <input type="date" class="form-control custom-input" name="fecha" id="fecha">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Hora</label>
                    <input type="time" class="form-control custom-input" name="hora" id="hora">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Folio</label>
                    <input type="text" class="form-control custom-input" name="folio">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Reporte Sección</label>
                    <input type="text" class="form-control custom-input" name="reporteseccion">
                </div>
                <div class="col-md-4">
                    <label class="form-label">ID Tarjeta de Circulación</label>
                    <input type="text" class="form-control custom-input" name="idtarjetacirculacion">
                </div>
                <div class="col-md-4">
                    <label class="form-label">ID Licencia</label>
                    <input type="text" class="form-control custom-input" name="idlicencia">
                </div>
                <div class="col-md-4">
                    <label class="form-label">ID Agente</label>
                    <input type="text" class="form-control custom-input" name="idagente">
                </div>
                <div class="col-md-4">
                    <label class="form-label">ID Pago</label>
                    <input type="text" class="form-control custom-input" name="idpago">
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100 btn-login fw-bold">Enviar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>''',
    'src/Admin/Fpago.php': '''<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Pagos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 flex-column">
    <div class="login-card shadow-lg p-4 p-md-5" style="max-width: 650px;">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Registro de Pagos</h2>
            <p class="text-muted">Ingresa los datos del pago.</p>
        </div>
        <form action="entidades/IPagos.php" method="post">
            <div class="mb-3">
                <label class="form-label">ID Pago</label>
                <input type="text" class="form-control custom-input" name="idpago" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control custom-input" name="nombre" required>
            </div>
            <div class="mb-4">
                <label class="form-label">Asignación</label>
                <input type="text" class="form-control custom-input" name="asignacion" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 btn-login fw-bold">Enviar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>''',
    'src/Admin/Fpago copy.php': '''<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Pagos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 flex-column">
    <div class="login-card shadow-lg p-4 p-md-5" style="max-width: 650px;">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Registro de Pagos</h2>
            <p class="text-muted">Ingresa los datos del pago.</p>
        </div>
        <form action="entidades/IPagos.php" method="post">
            <div class="mb-3">
                <label class="form-label">ID Pago</label>
                <input type="text" class="form-control custom-input" name="idpago" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control custom-input" name="nombre" required>
            </div>
            <div class="mb-4">
                <label class="form-label">Asignación</label>
                <input type="text" class="form-control custom-input" name="asignacion" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 btn-login fw-bold">Enviar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>''',
    'src/Admin/Fpropietario.php': '''<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Propietarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 flex-column">
    <div class="login-card shadow-lg p-4 p-md-5" style="max-width: 650px;">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Registro de Propietarios</h2>
            <p class="text-muted">Captura los datos del propietario.</p>
        </div>
        <form action="entidades/IPropietario.php" method="post">
            <div class="mb-3">
                <label class="form-label">ID Propietario</label>
                <input type="text" class="form-control custom-input" name="Idpropietario" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control custom-input" name="Nombre" required>
            </div>
            <div class="mb-3">
                <label class="form-label">RFC</label>
                <input type="text" class="form-control custom-input" name="RFC" required>
            </div>
            <div class="mb-4">
                <label class="form-label">ID Domicilio</label>
                <input type="text" class="form-control custom-input" name="Iddomicilio" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 btn-login fw-bold">Enviar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>''',
    'src/Admin/FtarjetasC.php': '''<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Tarjetas de Circulación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 flex-column">
    <div class="login-card shadow-lg p-4 p-md-5" style="max-width: 900px;">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Tarjetas de Circulación</h2>
            <p class="text-muted">Registro de tarjeta de circulación.</p>
        </div>
        <form action="entidades/ITarjetaC.php" method="get">
            <div class="row g-3 mb-3">
                <div class="col-md-4">
                    <label class="form-label">ID Tarjeta</label>
                    <input type="number" class="form-control custom-input" name="idtarjetaC" id="idtarjetaC">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Vigencia</label>
                    <input type="text" class="form-control custom-input" name="vigencia" id="vigencia">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Folio</label>
                    <input type="text" class="form-control custom-input" name="folio" id="folio">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Uso</label>
                    <input type="text" class="form-control custom-input" name="uso" id="uso">
                </div>
                <div class="col-md-4">
                    <label class="form-label">RPA</label>
                    <input type="text" class="form-control custom-input" name="rpa" id="rpa">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Firma Aut.</label>
                    <input type="text" class="form-control custom-input" name="firmaaut" id="firmaaut">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Fecha Exp.</label>
                    <input type="date" class="form-control custom-input" name="fechaexp" id="fechaexp">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Tipo Servicio</label>
                    <input type="text" class="form-control custom-input" name="tiposervicio" id="tiposervicio">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Holograma</label>
                    <input type="text" class="form-control custom-input" name="holograma" id="holograma">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Número de Serie</label>
                    <input type="text" class="form-control custom-input" name="numserie" id="numserie">
                </div>
                <div class="col-md-4">
                    <label class="form-label">ID Propietario</label>
                    <input type="number" class="form-control custom-input" name="idpropietario" id="idpropietario">
                </div>
                <div class="col-md-4">
                    <label class="form-label">ID Pago</label>
                    <input type="number" class="form-control custom-input" name="idpago" id="idpago">
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100 btn-login fw-bold">Registrar Tarjeta</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>''',
    'src/Admin/FtarjetaV.php': '''<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Tarjetas de Verificación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100 flex-column">
    <div class="login-card shadow-lg p-4 p-md-5" style="max-width: 900px;">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Tarjetas de Verificación</h2>
            <p class="text-muted">Registro de tarjeta de verificación.</p>
        </div>
        <form action="entidades/ITarjetaV.php" method="get">
            <div class="row g-3 mb-3">
                <div class="col-md-4">
                    <label class="form-label">ID Tarjeta V</label>
                    <input type="text" class="form-control custom-input" name="IdTarjetaV">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Número de Línea</label>
                    <input type="text" class="form-control custom-input" name="Num_linea">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Vigencia</label>
                    <input type="text" class="form-control custom-input" name="Vigencia">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Fecha Exp.</label>
                    <input type="date" class="form-control custom-input" name="Fecha_exp">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Hora Entrada</label>
                    <input type="time" class="form-control custom-input" name="Hora_entrada">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Hora Salida</label>
                    <input type="time" class="form-control custom-input" name="Hora_salida">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Semestre</label>
                    <input type="number" class="form-control custom-input" name="Semestre" step="1" min="1">
                </div>
                <div class="col-md-8">
                    <label class="form-label">Método de Análisis</label>
                    <input type="text" class="form-control custom-input" name="Met_analisisV">
                </div>
                <div class="col-md-4">
                    <label class="form-label">ID Centro V</label>
                    <input type="number" class="form-control custom-input" name="IdCentroV">
                </div>
                <div class="col-md-4">
                    <label class="form-label">ID Tarjeta C</label>
                    <input type="number" class="form-control custom-input" name="IdTarjetaC">
                </div>
                <div class="col-md-4">
                    <label class="form-label">ID Pago</label>
                    <input type="number" class="form-control custom-input" name="IdPago">
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100 btn-login fw-bold">Registrar Tarjeta</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>''',
    'src/Admin/Fvehiculo.php': '''<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Vehículos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
</body>
</html>''',
}

for path, content in pages.items():
    Path(path).write_text(content, encoding='utf-8')
    print(f'Updated {path}')
