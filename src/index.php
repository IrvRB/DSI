<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión DSI - Inicio</title>
    <link rel="stylesheet" href="DSI30/assets/menu.css">
    <style>
        body {
            margin: 0;
            padding: 20px;
            background-color: #f0f4f8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        #content {
            max-width: 1200px;
            margin: 20px auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 61, 130, 0.15);
        }
        
        h1 {
            color: #003D82;
            border-bottom: 3px solid #0056B3;
            padding-bottom: 10px;
            margin-top: 0;
        }
        
        h2 {
            color: #003D82;
        }
        
        .intro {
            background: linear-gradient(135deg, #0056B3 0%, #003D82 100%);
            color: white;
            padding: 25px;
            border-radius: 8px;
            margin-bottom: 30px;
            border-left: 5px solid #1E90FF;
        }
        
        .intro h2 {
            margin-top: 0;
            color: white;
        }
        
        .intro p {
            margin: 10px 0 0 0;
            line-height: 1.6;
        }
        
        .dashboard {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        
        .card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            border-left: 5px solid #0056B3;
            box-shadow: 0 2px 8px rgba(0, 61, 130, 0.1);
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            color: #333;
            display: block;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 16px rgba(0, 61, 130, 0.2);
            border-left-color: #1E90FF;
        }
        
        .card h3 {
            margin: 0 0 10px 0;
            color: #0056B3;
            font-size: 18px;
        }
        
        .card p {
            margin: 0;
            color: #666;
            font-size: 14px;
            line-height: 1.5;
        }
        
        .footer {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            text-align: center;
            color: #666;
            font-size: 12px;
        }
        
        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
            padding-top: 30px;
            border-top: 2px solid #e0e0e0;
        }
        
        .stat-box {
            background: #E3F2FD;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #0056B3;
            text-align: center;
        }
        
        .stat-box h4 {
            color: #0056B3;
            margin: 0 0 10px 0;
            font-size: 14px;
            text-transform: uppercase;
        }
        
        .stat-box .number {
            color: #003D82;
            font-size: 28px;
            font-weight: bold;
            margin: 0;
        }
    </style>
</head>
<body>
    <!-- MENÚ PRINCIPAL -->
    <div id="header">
        <ul class="nav">
            <li><a href="index.php">Inicio</a></li>
            <li>
                <a href="#">Personas</a>
                <ul>
                    <li>
                        <a href="#">Agentes</a>
                        <ul>
                            <li><a href="DSI30/Fagente.php">Insertar</a></li>
                            <li><a href="DSI30/delete/dagente.php">Eliminar</a></li>
                            <li><a href="DSI30/Fagente.php">Ver</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Conductores</a>
                        <ul>
                            <li><a href="DSI30/Fconductores.php">Insertar</a></li>
                            <li><a href="DSI30/delete/dconductores.php">Eliminar</a></li>
                            <li><a href="DSI30/Fconductores.php">Ver</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Propietarios</a>
                        <ul>
                            <li><a href="DSI30/Fpropietario.php">Insertar</a></li>
                            <li><a href="DSI30/delete/dpropietario.php">Eliminar</a></li>
                            <li><a href="DSI30/Fpropietario.php">Ver</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Vehículos</a>
                <ul>
                    <li>
                        <a href="#">Vehículos</a>
                        <ul>
                            <li><a href="DSI30/Fvehiculo.php">Insertar</a></li>
                            <li><a href="DSI30/delete/dvehiculo.php">Eliminar</a></li>
                            <li><a href="DSI30/Fvehiculo.php">Ver</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Tarjetas de Vehículo</a>
                        <ul>
                            <li><a href="DSI30/FtarjetaV.php">Insertar</a></li>
                            <li><a href="DSI30/delete/dtarjetaV.php">Eliminar</a></li>
                            <li><a href="DSI30/FtarjetaV.php">Ver</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Licencias</a>
                        <ul>
                            <li><a href="DSI30/Flicencias.php">Insertar</a></li>
                            <li><a href="DSI30/delete/dlicencias.php">Eliminar</a></li>
                            <li><a href="DSI30/Flicencias.php">Ver</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Documentos</a>
                <ul>
                    <li>
                        <a href="#">Tarjetas de Circulación</a>
                        <ul>
                            <li><a href="DSI30/FtarjetasC.php">Insertar</a></li>
                            <li><a href="DSI30/delete/dtarjetasC.php">Eliminar</a></li>
                            <li><a href="DSI30/FtarjetasC.php">Ver</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Domicilios</a>
                        <ul>
                            <li><a href="DSI30/FDomicilio.php">Insertar</a></li>
                            <li><a href="DSI30/FdDomicilio.php">Eliminar</a></li>
                            <li><a href="DSI30/FdDomicilio.php">Ver</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Infracciones</a>
                <ul>
                    <li>
                        <a href="#">Multas</a>
                        <ul>
                            <li><a href="DSI30/Fmulta.php">Insertar</a></li>
                            <li><a href="DSI30/delete/dmulta.php">Eliminar</a></li>
                            <li><a href="DSI30/Fmulta.php">Ver</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pagos</a>
                        <ul>
                            <li><a href="DSI30/Fpago.php">Insertar</a></li>
                            <li><a href="DSI30/delete/dpago.php">Eliminar</a></li>
                            <li><a href="DSI30/Fpago.php">Ver</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Seguridad</a>
                <ul>
                    <li>
                        <a href="#">Centros de Verificación</a>
                        <ul>
                            <li><a href="DSI30/FcentrosV.php">Insertar</a></li>
                            <li><a href="DSI30/delete/dcentrosV.php">Eliminar</a></li>
                            <li><a href="DSI30/FcentrosV.php">Ver</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="user-section">
                <a href="#" title="Perfil">Perfil</a>
                <a href="login.php" title="Cerrar sesión">Salir</a>
            </li>
        </ul>
    </div>

    <!-- CONTENIDO PRINCIPAL -->
    <div id="content">
        <h1>Bienvenido al Sistema de Gestión DSI</h1>
        
        <div class="intro">
            <h2>Sistema de Gestión de Infracciones de Tránsito</h2>
            <p>Administra de forma centralizada agentes, conductores, vehículos, infracciones y pagos. Selecciona una opción del menú para comenzar.</p>
        </div>
        
        <h2>Acceso Rápido a Módulos</h2>
        <div class="dashboard">
            <a href="DSI30/Fagente.php" class="card">
                <h3>Agentes</h3>
                <p>Gestionar agentes del sistema</p>
            </a>
            <a href="DSI30/Fconductores.php" class="card">
                <h3>Conductores</h3>
                <p>Administrar conductores registrados</p>
            </a>
            <a href="DSI30/Fvehiculo.php" class="card">
                <h3>Vehículos</h3>
                <p>Gestionar vehículos del sistema</p>
            </a>
            <a href="DSI30/Flicencias.php" class="card">
                <h3>Licencias</h3>
                <p>Control de licencias de conducir</p>
            </a>
            <a href="DSI30/Fmulta.php" class="card">
                <h3>Multas</h3>
                <p>Registro de infracciones y multas</p>
            </a>
            <a href="DSI30/Fpago.php" class="card">
                <h3>Pagos</h3>
                <p>Gestionar pagos de multas</p>
            </a>
            <a href="DSI30/FtarjetasC.php" class="card">
                <h3>Tarjetas de Circulación</h3>
                <p>Tarjetas de circulación vehicular</p>
            </a>
            <a href="DSI30/FcentrosV.php" class="card">
                <h3>Centros de Verificación</h3>
                <p>Centros de verificación y control</p>
            </a>
            <a href="DSI30/Fpropietario.php" class="card">
                <h3>Propietarios</h3>
                <p>Información de propietarios de vehículos</p>
            </a>
        </div>
        
        <div class="footer">
            <p><strong>Sistema DSI v1.0</strong> | Gestión Integral de Infracciones de Tránsito</p>
            <p>&copy; 2024 - 2026 | Todos los derechos reservados</p>
        </div>
    </div>
</body>
</html>
