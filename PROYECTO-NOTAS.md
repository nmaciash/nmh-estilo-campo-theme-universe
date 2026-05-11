---
name: Estilo Campo — Estado del proyecto
description: Historial completo del trabajo realizado en el tema WordPress de Estilo Campo, incluyendo la landing promo y el sistema de marketing
type: project
originSessionId: e6aa83d0-1128-43e7-9528-75c0507de715
---
## Contexto

Tema WordPress a medida para Estilo Campo (restaurante/asador argentino en Marbella).
El cliente usa el plugin **Five Star Restaurant Reservations** (versión free, slug `rtb`) para gestionar reservas.
El formulario del plugin se usa en dos páginas:
- **Página de reservas principal** (la única que permite el plugin free de forma nativa)
- **Landing de promoción** (`page-templates/page-landing-promo.php`), donde se inyecta con `rtb_print_booking_form()`

---

## Base de datos

Se creó manualmente (vía SQL) la tabla `wp_marketing_leads` con esta estructura:

| Campo | Tipo |
|---|---|
| id | INT AUTO_INCREMENT PK |
| nombre | VARCHAR |
| email | VARCHAR |
| telefono | VARCHAR |
| fecha_reserva | VARCHAR |
| personas | INT |
| origen | VARCHAR — 'Landing Promo' o 'Web Principal' |
| como_nos_conocio | VARCHAR — valor del select o 'No indicado' |

La tabla es independiente de las reservas del plugin. Si el cliente borra reservas desde el panel de WordPress, los leads de marketing no se pierden.

---

## Hooks en functions.php

Dos funciones enganchadas a `rtb_insert_booking` (hook propio del plugin, se dispara al guardar una reserva):

- **`ec_save_custom_booking_meta`** — guarda `booking_source` y `how_hear` en los metadatos del post de la reserva
- **`ec_log_to_marketing_history`** — copia los datos del lead a `wp_marketing_leads`

Ambas leen los valores de marketing desde **`$_COOKIE`** (no de `$_POST`). Este fue el cambio clave de esta sesión.

---

## Sistema de cookies (sesión 2025-04)

Para evitar pelear contra el re-renderizado del formulario del plugin, se abandonó la inyección de campos vía JS y se adoptó un sistema de cookies:

- **`booking_source`**: se escribe en JS al cargar cualquier página que tenga el formulario del plugin
  - Landing promo → `'Landing Promo'`
  - Cualquier otra página con el formulario → `'Web Principal'` (sobreescribe la cookie si el usuario venía de la landing)
- **`how_hear`**: se escribe en JS cuando el usuario selecciona una opción en el select externo (ver abajo)

Las cookies viajan con el POST del plugin → el hook PHP las lee correctamente.

---

## Select "¿Cómo nos conoció?"

Vive en `page-templates/page-landing-promo.php`, **fuera del formulario del plugin**, dentro del `div.lp__form-card` pero después del shortcode. IDs: `#lp-how-hear` / `.lp__how-hear-wrap`.

Opciones: Redes Sociales, Instagram, Facebook, Periódico / Revista, Recomendación de un amigo, Otros.

El submit del formulario del plugin se intercepta en `scripts.js`: si el select está vacío, se bloquea el envío, se hace scroll hasta el select y se muestra error visual (borde rojo + mensaje en el label vía CSS `::after`).

**En la página de reservas normal el select no existe y el bloqueo no actúa** — el `if` en scripts.js comprueba la clase `page-template-page-templates-page-landing-promo` en el body.

---

## Archivos principales modificados

| Archivo | Qué contiene |
|---|---|
| `functions.php` | Hooks `rtb_insert_booking`, enqueue de estilos/scripts, TOC para blog |
| `page-templates/page-landing-promo.php` | Template de la landing con header/footer propios y select externo |
| `page-templates/page-gracias-por-contactar.php` | Página de confirmación (sin cambios relevantes en esta sesión) |
| `assets/js/scripts.js` | Lógica general del tema + cookies de marketing + bloqueo del submit |
| `style.css` | Estilos generales + bloque `lp__*` para la landing (~línea 6508 en adelante) |

---

## Errores JS corregidos en esta sesión

Errores preexistentes que reventaban en la landing por ausencia del header principal:

- `$(".nm-nav").position().top` → añadido `&& $('.nm-nav').length` en el guard del scroll (línea ~33)
- `document.querySelector(".hamburger-btn").addEventListener(...)` → añadida comprobación de existencia antes del `addEventListener` (línea ~69)

---

## Pendiente / A vigilar

- **Verificar en producción** que las cookies llegan correctamente al hook PHP y que `wp_marketing_leads` se está rellenando. Revisar con una reserva de prueba desde la landing.
- **Comprobar la clase CSS del body** en la landing para confirmar que es exactamente `page-template-page-templates-page-landing-promo` (depende de cómo WordPress genera la clase a partir de la ruta del template). Si el bloqueo del submit no funciona o la cookie no se escribe, este es el primer punto a verificar con `console.log($('body').attr('class'))`.
- El campo "¿Cómo nos conoció?" aparece **debajo del botón "Solicitar Reserva"** — la posición es funcional pero no ideal en términos de UX. Queda pendiente valorar si moverlo visualmente (requeriría CSS de posicionamiento más complejo o reordenar el HTML).
- La página `page-gracias-por-contactar.php` usa el header/footer principal — no está integrada con el flujo de la landing.
