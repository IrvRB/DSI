<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de Integración del Menú</title>
    <link rel="stylesheet" href="assets/menu.css">
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
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 61, 130, 0.15);
        }
        
        h1 {
            color: #003D82;
            border-bottom: 3px solid #0056B3;
            padding-bottom: 10px;
        }
        
        h3 {
            color: #0056B3;
        }
        
        .code-box {
            background: #f4f4f4;
            border-left: 4px solid #0056B3;
            padding: 15px;
            margin: 20px 0;
            font-family: monospace;
            overflow-x: auto;
        }
        
        .step {
            margin: 20px 0;
            padding: 15px;
            background: #E3F2FD;
            border-radius: 5px;
        }
        
        .step h3 {
            margin-top: 0;
            color: #0056B3;
        }
    </style>
</head>
<body>
    <!-- MENÚ -->
    <div id="header">
        <ul class="nav">
            <li><a href="../index.php">Inicio</a></li>
            <li>
                <a href="#">Personas</a>
                <ul>
                    <li><a href="Fagente.php">Agentes</a></li>
                    <li><a href="Fconductores.php">Conductores</a></li>
                    <li><a href="Fpropietario.php">Propietarios</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Vehículos</a>
                <ul>
                    <li><a href="Fvehiculo.php">Vehículos</a></li>
                    <li><a href="FtarjetaV.php">Tarjetas de Vehículo</a></li>
                    <li><a href="Flicencias.php">Licencias</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Documentos</a>
                <ul>
                    <li><a href="FtarjetasC.php">Tarjetas de Circulación</a></li>
                    <li><a href="FdDomicilio.php">Domicilios</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Infracciones</a>
                <ul>
                    <li><a href="Fmulta.php">Multas</a></li>
                    <li><a href="Fpago.php">Pagos</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Seguridad</a>
                <ul>
                    <li><a href="FcentrosV.php">Centros de Verificación</a></li>
                </ul>
            </li>
            <li class="user-section">
                <a href="#" title="Perfil">Perfil</a>
                <a href="../login.php" title="Cerrar sesión">Salir</a>
            </li>
        </ul>
    </div>

    <!-- CONTENIDO -->
    <div id="content">
        <h1>📖 Cómo Integrar el Menú en tus Páginas</h1>

        <div class="step">
            <h3>Paso 1: Entender la Estructura</h3>
            <p>Tu proyecto tiene esta estructura:</p>
            <div class="code-box">
/DSI/
  ├── index.php (página de inicio)
  ├── login.php
  ├── DSI30/
  │   ├── Fagente.php
  │   ├── Fconductores.php
  │   ├── Fmulta.php
  │   ├── assets/
  │   │   ├── menu.css (estilos del menú)
  │   │   └── menu.php (componente del menú)
            </div>
        </div>

        <div class="step">
            <h3>Paso 2: El Menú Funciona de Dos Formas</h3>
            <p><strong>Opción A:</strong> Usando PHP (incluir el componente)</p>
            <div class="code-box">
&lt;?php
    // Al inicio de tu archivo
    include 'assets/menu.php';
    
    // Tu código existente...
?&gt;
            </div>
            
            <p><strong>Opción B:</strong> Copiando el HTML directamente (para mayor control)</p>
            <div class="code-box">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;link rel="stylesheet" href="assets/menu.css"&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div id="header"&gt;
        &lt;ul class="nav"&gt;
            &lt;!-- Menú aquí --&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    
    &lt;div id="content"&gt;
        &lt;!-- Tu contenido aquí --&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
            </div>
        </div>

        <div class="step">
            <h3>Paso 3: Cómo Funciona</h3>
            <ul>
                <li><strong>menu.css:</strong> Define los estilos del menú (colores, espaciado, efectos hover)</li>
                <li><strong>menu.php:</strong> Genera dinámicamente el HTML del menú</li>
                <li><strong>Estructura:</strong> Menú horizontal en la parte superior con submenus desplegables</li>
                <li><strong>Iconos:</strong> Emojis para identificar rápidamente cada sección</li>
                <li><strong>Responsivo:</strong> Se adapta a diferentes tamaños de pantalla</li>
            </ul>
        </div>

        <div class="step">
            <h3>Paso 4: Ejemplo en Fmulta.php</h3>
            <p>Para integrar el menú en tu archivo <code>Fmulta.php</code>, agrega esto al inicio:</p>
            <div class="code-box">
&lt;?php
// Agregar esto antes de generar el PDF
$menu_html = file_get_contents('assets/menu.php');
echo $menu_html;

// Tu código de PDF continúa aquí...
?&gt;
            </div>
            
            <p>O directamente copia el HTML del menú como se muestra arriba.</p>
        </div>

        <div class="step">
            <h3>✅ Características del Menú</h3>
            <ul>
                <li>✓ Menú desplegable con submenus en cascada</li>
                <li>✓ Efectos hover suave en los elementos</li>
                <li>✓ Icono de inicio que lleva a index.php</li>
                <li>✓ Sección de usuario en la derecha (Perfil y Salir)</li>
                <li>✓ Acceso a todos los módulos del sistema</li>
                <li>✓ Estilos profesionales y modernos</li>
                <li>✓ Compatible con navegadores modernos</li>
            </ul>
        </div>

        <div class="step">
            <h3>📁 Archivos Creados/Modificados</h3>
            <ul>
                <li><strong>DSI30/assets/menu.css</strong> - Estilos del menú (NUEVO)</li>
                <li><strong>DSI30/assets/menu.php</strong> - Componente del menú (NUEVO)</li>
                <li><strong>index.php</strong> - Página de inicio con menú y dashboard (MODIFICADO)</li>
                <li><strong>index_menu.html</strong> - Ejemplo HTML estático (NUEVO)</li>
                <li><strong>README_MENU.md</strong> - Documentación (NUEVO)</li>
            </ul>
        </div>

        <div class="step">
            <h3>🚀 Próximos Pasos</h3>
            <ol>
                <li>Abre <code>index.php</code> en tu navegador para ver el menú en acción</li>
                <li>Usa el menú para navegar entre los diferentes módulos</li>
                <li>Integra el menú en tus páginas PHP siguiendo los ejemplos</li>
                <li>Personaliza los estilos editando <code>assets/menu.css</code></li>
                <li>Agrega más opciones al menú según tus necesidades</li>
            </ol>
        </div>
    </div>
</body>
</html>
