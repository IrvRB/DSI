# Manual de Implementación del Menú del Sistema

## Archivos Creados

### 1. `assets/menu.css`
Archivo de estilos del menú con diseño responsive y efectos hover.

### 2. `assets/menu.php`
Componente reutilizable del menú que puede incluirse en todas las páginas PHP.

### 3. `index_menu.html`
Página de inicio con ejemplo completo del menú implementado.

---

## Cómo Implementar el Menú en tus Páginas

### Opción 1: En Páginas PHP (Recomendado)

Agrega esta línea al inicio de cualquier archivo `.php` en la carpeta `DSI30/`:

```php
<?php
    // Al inicio del archivo, después de cualquier validación de sesión
    include 'assets/menu.php';
?>
```

Ejemplo en `Fagente.php`:
```php
<?php
    // Incluir el menú
    include 'assets/menu.php';
    
    // Tu código existente aquí
    // ...
?>
```

### Opción 2: Incluir Solo el CSS y HTML

Si prefieres tener más control, puedes copiar el código del menú directamente:

```html
<head>
    <link rel="stylesheet" href="assets/menu.css">
</head>
<body>
    <div id="header">
        <!-- Código del menú aquí -->
    </div>
    <!-- Tu contenido aquí -->
</body>
```

---

## Estructura del Menú

El menú está organizado por categorías:

### 1. **Personas**
   - Agentes
   - Conductores
   - Propietarios

### 2. **Vehículos**
   - Vehículos
   - Tarjetas de Vehículo
   - Licencias

### 3. **Documentos**
   - Tarjetas de Circulación
   - Domicilios

### 4. **Infracciones**
   - Multas
   - Pagos

### 5. **Seguridad**
   - Centros de Verificación

### 6. **Sección de Usuario**
   - Perfil
   - Salir

---

## Personalización

### Cambiar Rutas
Si los archivos se encuentran en diferentes ubicaciones, modifica las rutas en `menu.php`:

```php
// Cambiar la ruta base según sea necesario
$base_path = '.';  // Para archivos en la misma carpeta
$base_path = '..'; // Para archivos en carpeta padre
```

### Agregar Más Opciones
Para agregar un nuevo submenu:

```html
<li>
    <a href="#">
        <span class="menu-icon">🔧</span>Nueva Opción
    </a>
    <ul>
        <li><a href="archivo1.php">Opción 1</a></li>
        <li><a href="archivo2.php">Opción 2</a></li>
    </ul>
</li>
```

### Cambiar Estilos
Edita `assets/menu.css` para modificar:
- Colores de fondo
- Tamaño de fuentes
- Espaciado
- Efectos hover

---

## Características

✅ Menú desplegable con submenus  
✅ Soporte para múltiples niveles  
✅ Estilos modernos y profesionales  
✅ Efectos hover suave  
✅ Compatible con navegadores modernos  
✅ Reutilizable en todas las páginas  
✅ Incluye iconos emoji para mejor UX  
✅ Sección de usuario a la derecha  

---

## Archivos Relacionados

Asegúrate de que los siguientes archivos existan en `DSI30/`:

- ✅ Fagente.php
- ✅ FcentrosV.php
- ✅ Fconductores.php
- ✅ FdDomicilio.php
- ✅ FDomicilio.php
- ✅ Flicencias.php
- ✅ Fmulta.php
- ✅ Fpago.php
- ✅ Fpropietario.php
- ✅ FtarjetasC.php
- ✅ FtarjetaV.php
- ✅ Fvehiculo.php

---

## Soporte

Para más información, revisa los archivos:
- [menu.php](menu.php) - Código del menú
- [menu.css](menu.css) - Estilos del menú
- [index_menu.html](index_menu.html) - Ejemplo de implementación
