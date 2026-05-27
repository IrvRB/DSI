<?php
/**
 * Menu Principal del Sistema
 * Incluir este archivo en todas las páginas principales
 * Uso: <?php include 'assets/menu.php'; ?>
 */

// Detectar automáticamente la ruta base
$script_dir = dirname(__FILE__);
$base_path = '.';

// Si estamos en una carpeta dentro de DSI30, ajustar la ruta
if (strpos($_SERVER['PHP_SELF'], '/DSI30/') !== false) {
    $base_path = '.';
} else {
    $base_path = 'DSI30';
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión - DSI</title>
    <link rel="stylesheet" href="<?php echo $base_path; ?>/assets/menu.css">
</head>
<body>
    <div id="header">
        <ul class="nav">
            <!-- Inicio -->
            <li>
                <a href="<?php echo $base_path; ?>/../">
                    Inicio
                </a>
            </li>

            <!-- Gestión de Personas -->
            <li>
                <a href="#">
                    Personas
                </a>
                <ul>
                    <li>
                        <a href="#">Agentes</a>
                        <ul>
                            <li><a href="<?php echo $base_path; ?>/Fagente.php">Insertar</a></li>
                            <li><a href="<?php echo $base_path; ?>/delete/dagente.php">Eliminar</a></li>
                            <li><a href="<?php echo $base_path; ?>/Fagente.php">Ver</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Conductores</a>
                        <ul>
                            <li><a href="<?php echo $base_path; ?>/Fconductores.php">Insertar</a></li>
                            <li><a href="<?php echo $base_path; ?>/delete/dconductores.php">Eliminar</a></li>
                            <li><a href="<?php echo $base_path; ?>/Fconductores.php">Ver</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Propietarios</a>
                        <ul>
                            <li><a href="<?php echo $base_path; ?>/Fpropietario.php">Insertar</a></li>
                            <li><a href="<?php echo $base_path; ?>/delete/dpropietario.php">Eliminar</a></li>
                            <li><a href="<?php echo $base_path; ?>/Fpropietario.php">Ver</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <!-- Gestión de Vehículos -->
            <li>
                <a href="#">
                    Vehículos
                </a>
                <ul>
                    <li>
                        <a href="#">Vehículos</a>
                        <ul>
                            <li><a href="<?php echo $base_path; ?>/Fvehiculo.php">Insertar</a></li>
                            <li><a href="<?php echo $base_path; ?>/delete/dvehiculo.php">Eliminar</a></li>
                            <li><a href="<?php echo $base_path; ?>/Fvehiculo.php">Ver</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Tarjetas de Vehículo</a>
                        <ul>
                            <li><a href="<?php echo $base_path; ?>/FtarjetaV.php">Insertar</a></li>
                            <li><a href="<?php echo $base_path; ?>/delete/dtarjetaV.php">Eliminar</a></li>
                            <li><a href="<?php echo $base_path; ?>/FtarjetaV.php">Ver</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Licencias</a>
                        <ul>
                            <li><a href="<?php echo $base_path; ?>/Flicencias.php">Insertar</a></li>
                            <li><a href="<?php echo $base_path; ?>/delete/dlicencias.php">Eliminar</a></li>
                            <li><a href="<?php echo $base_path; ?>/Flicencias.php">Ver</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <!-- Gestión de Documentos -->
            <li>
                <a href="#">
                    Documentos
                </a>
                <ul>
                    <li>
                        <a href="#">Tarjetas de Circulación</a>
                        <ul>
                            <li><a href="<?php echo $base_path; ?>/FtarjetasC.php">Insertar</a></li>
                            <li><a href="<?php echo $base_path; ?>/delete/dtarjetasC.php">Eliminar</a></li>
                            <li><a href="<?php echo $base_path; ?>/FtarjetasC.php">Ver</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Domicilios</a>
                        <ul>
                            <li><a href="<?php echo $base_path; ?>/FDomicilio.php">Insertar</a></li>
                            <li><a href="<?php echo $base_path; ?>/FdDomicilio.php">Eliminar</a></li>
                            <li><a href="<?php echo $base_path; ?>/FdDomicilio.php">Ver</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <!-- Gestión de Infracciones -->
            <li>
                <a href="#">
                    Infracciones
                </a>
                <ul>
                    <li>
                        <a href="#">Multas</a>
                        <ul>
                            <li><a href="<?php echo $base_path; ?>/Fmulta.php">Insertar</a></li>
                            <li><a href="<?php echo $base_path; ?>/delete/dmulta.php">Eliminar</a></li>
                            <li><a href="<?php echo $base_path; ?>/Fmulta.php">Ver</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pagos</a>
                        <ul>
                            <li><a href="<?php echo $base_path; ?>/Fpago.php">Insertar</a></li>
                            <li><a href="<?php echo $base_path; ?>/delete/dpago.php">Eliminar</a></li>
                            <li><a href="<?php echo $base_path; ?>/Fpago.php">Ver</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <!-- Seguridad -->
            <li>
                <a href="#">
                    Seguridad
                </a>
                <ul>
                    <li>
                        <a href="#">Centros de Verificación</a>
                        <ul>
                            <li><a href="<?php echo $base_path; ?>/FcentrosV.php">Insertar</a></li>
                            <li><a href="<?php echo $base_path; ?>/delete/dcentrosV.php">Eliminar</a></li>
                            <li><a href="<?php echo $base_path; ?>/FcentrosV.php">Ver</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <!-- Sección de Usuario (derecha) -->
            <li class="user-section">
                <a href="#" title="Perfil">Perfil</a>
                <a href="#" title="Cerrar sesión">Salir</a>
            </li>
        </ul>
    </div>
</body>
</html>
