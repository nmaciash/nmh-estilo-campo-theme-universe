---
name: Estilo Campo — Fase: Panel de administración de leads
description: Especificación completa para implementar un panel de gestión de leads en el área de administración de WordPress, alimentado por wp_marketing_leads
type: feature-spec
phase: 2
dependsOn: PROYECTO-NOTAS.md
---

## Contexto heredado

Esta fase parte del sistema ya implementado en `PROYECTO-NOTAS.md`:

- La tabla `wp_marketing_leads` ya existe y se rellena automáticamente desde el hook `ec_log_to_marketing_history` en `functions.php`
- Los campos disponibles son: `id`, `nombre`, `email`, `telefono`, `fecha_reserva`, `personas`, `origen`, `como_nos_conocio`
- El campo `origen` puede valer `'Landing Promo'` o `'Web Principal'`
- El plugin de reservas es **Five Star Restaurant Reservations** (slug `rtb`)

---

## Objetivo de la fase

Crear una **página de administración personalizada** dentro del panel de WordPress que permita a la agencia:

1. Ver todos los leads en una tabla con paginación
2. Filtrar por `origen`, `como_nos_conocio` y rango de fechas
3. Buscar por nombre, email o teléfono
4. Exportar el resultado filtrado a **CSV** con un solo clic
5. Ver un resumen estadístico básico en la cabecera del panel (total leads, desglose por origen)

No se requiere edición ni borrado de registros desde este panel (solo lectura + exportación).

---

## Implementación técnica

### Archivo(s) a modificar / crear

| Archivo | Acción |
|---|---|
| `functions.php` | Añadir el bloque de registro del menú de admin y la lógica de la página |
| `assets/css/admin-leads.css` *(opcional)* | Estilos propios del panel si se quiere ir más allá del CSS nativo de WP Admin |

> **Preferencia**: mantener todo en `functions.php` mediante un `include` a un archivo separado `inc/admin-leads.php` para no engordar más `functions.php`. Decidir según criterio del desarrollador.

---

### Registro del menú en WordPress

```php
add_action('admin_menu', 'ec_register_leads_menu');

function ec_register_leads_menu() {
    add_menu_page(
        'Leads de Marketing',       // Título de la página
        'Leads Marketing',          // Etiqueta en el menú lateral
        'manage_options',           // Capacidad requerida (solo admins)
        'ec-leads',                 // Slug de la página
        'ec_render_leads_page',     // Función que renderiza el contenido
        'dashicons-groups',         // Icono (dashicon)
        30                          // Posición en el menú
    );
}
```

---

### Lógica de la página (`ec_render_leads_page`)

La función debe:

1. **Leer los parámetros GET** de filtro: `origen`, `como_nos_conocio`, `fecha_desde`, `fecha_hasta`, `buscar`, `paged`
2. **Sanitizarlos** con `sanitize_text_field()` y `sanitize_email()` según corresponda
3. **Construir la query SQL** con `$wpdb->prepare()` usando `WHERE` condicional según los filtros activos
4. **Calcular el total** para la paginación (`SQL_CALC_FOUND_ROWS` o query de conteo separada)
5. **Detectar si se pide exportación CSV** (parámetro GET `exportar=1`) y en ese caso:
   - Enviar headers `Content-Type: text/csv` y `Content-Disposition: attachment`
   - Volcar todos los registros filtrados (sin límite de paginación) y hacer `exit`
6. **Renderizar el HTML** del panel si no es exportación

---

### Estructura HTML del panel

```
[Cabecera]
  - Título "Leads de Marketing — Estilo Campo"
  - Tarjetas de resumen: Total leads | Desde Landing | Desde Web Principal

[Formulario de filtros] (GET, mismo action)
  - Input texto: Buscar (nombre / email / teléfono)
  - Select: Origen (Todos / Landing Promo / Web Principal)
  - Select: ¿Cómo nos conoció? (Todos + opciones del campo)
  - Date input: Fecha desde / Fecha hasta
  - Botón: Filtrar
  - Botón secundario: Limpiar filtros (href a la página sin parámetros)

[Botón exportar CSV] (mismo GET + &exportar=1, fuera del form o como enlace)

[Tabla de resultados]
  Columnas: ID | Nombre | Email | Teléfono | Fecha reserva | Personas | Origen | Cómo nos conoció

[Paginación] — usando paginate_links() de WordPress
```

---

### Exportación CSV

```php
// Detectar exportación antes de cualquier output HTML
if ( isset($_GET['exportar']) && $_GET['exportar'] === '1' && current_user_can('manage_options') ) {
    // Construir misma query pero sin LIMIT/OFFSET
    // ...
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="leads-estilo-campo-' . date('Y-m-d') . '.csv"');
    $out = fopen('php://output', 'w');
    fprintf($out, chr(0xEF).chr(0xBB).chr(0xBF)); // BOM UTF-8 para Excel
    fputcsv($out, ['ID', 'Nombre', 'Email', 'Teléfono', 'Fecha Reserva', 'Personas', 'Origen', 'Cómo nos conoció']);
    foreach ($leads as $lead) {
        fputcsv($out, (array) $lead);
    }
    fclose($out);
    exit;
}
```

> ⚠️ El BOM UTF-8 (`chr(0xEF).chr(0xBB).chr(0xBF)`) es importante para que Excel en Windows abra el CSV sin romper las tildes.

---

### Seguridad

- Envolver toda la función de renderizado con `if ( ! current_user_can('manage_options') ) return;`
- Usar siempre `$wpdb->prepare()` para las queries con parámetros de usuario
- Sanitizar todos los inputs GET antes de usarlos en queries o en output HTML
- Para el output HTML de datos de la tabla usar `esc_html()`

---

## Comportamiento esperado por escenario

| Escenario | Resultado esperado |
|---|---|
| Sin filtros activos | Todos los leads, paginados (20 por página) |
| Filtro origen = Landing Promo | Solo leads con `origen = 'Landing Promo'` |
| Filtro búsqueda = "garcia" | Leads cuyo nombre, email o teléfono contengan "garcia" (LIKE, case-insensitive) |
| Exportar con filtros activos | CSV con exactamente los registros que muestra la tabla en ese momento |
| Usuario sin `manage_options` | Acceso denegado (WordPress gestiona esto por `add_menu_page`) |

---

## Pendiente / decisiones a confirmar antes de implementar

- [ ] ¿Se usa `inc/admin-leads.php` separado o todo en `functions.php`?
- [ ] ¿Cuántos registros por página? (sugerencia: 20)
- [ ] ¿Se quiere restringir el acceso a un rol personalizado en lugar de `manage_options`? (por ejemplo, para que la agencia tenga su propio rol sin acceso a todo el admin)
- [ ] ¿Se añaden estilos WP Admin nativos (`wp-list-table`) o estilos propios?
- [ ] Confirmar que el campo `fecha_reserva` se almacena en formato `YYYY-MM-DD` o similar para que el filtro de rango funcione correctamente con comparación de strings (si no, habría que adaptar la query)