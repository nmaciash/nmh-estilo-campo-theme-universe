<?php



/***************************/
//        ESTILOS
/***************************/

// Incluir Bootstrap CSS
function bootstrap_css()
{
    wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3');
}
add_action('wp_enqueue_scripts', 'bootstrap_css');


// Incluir hoja estilos

function load_stylesheets()
{
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', '1.0', 'all');
    wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');




/***************************/
//        FUENTES
/***************************/


add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('antonio-regular', get_template_directory_uri() . '/assets/fonts/Antonio-Regular/stylesheet.css');
    wp_enqueue_style('dancing-script-regular', get_template_directory_uri() . '/assets/fonts/DancingScript-Regular/stylesheet.css');
    wp_enqueue_style('ivy-css', get_template_directory_uri() . '/assets/fonts/ivy-mode-6/stylesheet.css');
    wp_enqueue_style('opensans-css', get_template_directory_uri() . '/assets/fonts/OpenSans-Regular/stylesheet.css');
    wp_enqueue_style('prata-css', get_template_directory_uri() . '/assets/fonts/Prata/stylesheet.css');
    wp_enqueue_style('rubik-css', get_template_directory_uri() . '/assets/fonts/Rubik/stylesheet.css');
    wp_enqueue_style('noto-serif-display-css', get_template_directory_uri() . '/assets/fonts/Noto_Serif_Display/stylesheet.css');
    wp_enqueue_style('montserrat-css', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');
    wp_enqueue_style('material-icons', '//fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0');
});



/***************************/
//        SCRIPTS
/***************************/


// Incluir jQuery

function mi_inicio()
{
    if (!is_admin()) {
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'mi_inicio');



// Incluir Custom JS

function load_javascript()
{
    wp_register_script('custom', get_template_directory_uri() . '/assets/js/scripts.js', 'jquery', 1, true);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_javascript');



// Incluir Bootstrap JS 
function bootstrap_js()
{
    wp_enqueue_script('bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.1.3', true);
}
add_action('wp_enqueue_scripts', 'bootstrap_js');







/***************************/
//        SOPORTE
/***************************/



// Incluir soporte
add_theme_support('menus');
add_theme_support('post-thumbnails');


// Soporte para Woocommerce
function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');


// Logo

add_action('after_setup_theme', function () {
    $defaults = array(
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description'),
        'unlink-homepage-logo' => false,
    );

    add_theme_support('custom-logo', $defaults);
});









// Soporte para videos - Permite generar autoplay que bloquean muchos navegadores - para utilizar con wp_video_shortcode

// add_filter( 'wp_video_shortcode', function( $html ) {
//     return str_replace( '<video', '<video muted playsinline autoplay', $html );
//  } );








/***************************/
//        MENÚS
/***************************/

// Registrar Menus

register_nav_menus(
    array(
        'main-menu' => 'Main Menu',
        'footer-menu-01' => 'Footer Menú 01',
        'footer-menu-02' => 'Footer Menú 02',
    )
);





/***************************/
//        IMÁGENES
/***************************/

// Add image sizes
add_image_size('post_image', 1100, 550, false);




/***************************/
//        WIDGETS
/***************************/


// Incluir Widgets
register_sidebar(

    array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    )
);


register_sidebar(

    array(
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    )
);






/***************************/
//        FUNCIONES
/***************************/


// Conseguir el id a partir del post_id y de la meta_key de la tabla postmeta

function get_m_id_by_key($post_id, $meta_key)
{
    global $wpdb;
    $mid = $wpdb->get_var($wpdb->prepare("SELECT meta_id FROM $wpdb->postmeta WHERE post_id = %d AND meta_key = %s", $post_id, $meta_key));
    if ($mid != '')
        return (int) $mid;

    return false;
}







// *****************************************************************
//        AGREGAR TABLA CONTENIDOS A ENTRADAS BLOG PARA SEO
//******************************************************************

function mi_toc_sin_plugin($content)
{
    if (!is_singular('post') || !in_the_loop() || !is_main_query() || is_feed() || is_preview()) {
        return $content;
    }

    libxml_use_internal_errors(true);
    $html = '<?xml encoding="utf-8" ?>' . '<div id="__toc_wrap">' . $content . '</div>';
    $dom = new DOMDocument('1.0', 'UTF-8');
    $dom->preserveWhiteSpace = false;
    $dom->loadHTML($html, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    $xp = new DOMXPath($dom);

    // Capturamos H2 y H3
    $hs = $xp->query('//h2 | //h3');
    if (!$hs || $hs->length === 0) {
        return $content;
    }

    $usados = [];
    $tree = []; // H2 con hijos H3
    $currentH2 = null;

    foreach ($hs as $i => $h) {
        // Asegurar ID único
        $id = $h->getAttribute('id');
        if (!$id) {
            $txt = trim(preg_replace('/\s+/', ' ', $h->textContent));
            $slug = function_exists('sanitize_title') ? sanitize_title($txt) : trim(strtolower(preg_replace('/[^a-z0-9\-]+/i', '-', $txt)), '-');
            if ($slug === '') {
                $slug = 'seccion-' . ($i + 1);
            }
            $base = $slug;
            $n = 2;
            while (isset($usados[$slug])) {
                $slug = $base . '-' . $n++;
            }
            $id = $slug;
            $h->setAttribute('id', $id);
        } else {
            $base = $id;
            $n = 2;
            while (isset($usados[$id])) {
                $id = $base . '-' . $n++;
            }
            $h->setAttribute('id', $id);
        }
        $usados[$id] = true;

        $item = [
            'id' => $id,
            'text' => trim(preg_replace('/\s+/', ' ', $h->textContent)),
            'level' => strtolower($h->nodeName), // h2 / h3
            'children' => []
        ];

        if ($item['level'] === 'h2') {
            $tree[] = $item;
            $currentH2 = count($tree) - 1;
        } else { // h3
            if ($currentH2 === null) {
                // Si hay un H3 antes de cualquier H2, lo subimos como H2
                $item['level'] = 'h2';
                $tree[] = $item;
                $currentH2 = count($tree) - 1;
            } else {
                $tree[$currentH2]['children'][] = $item;
            }
        }
    }

    // Construir el HTML del TOC con <details> (sin usar <nav>)
    $label = 'Tabla de contenidos';
    $toc = '<div class="wp-toc" role="navigation" aria-label="' . $label . '">';
    $toc .= '<details open class="wp-toc-card">';
    $toc .= '<summary class="wp-toc-summary">' . $label . '</summary>';
    $toc .= '<div class="wp-toc-body"><ul class="wp-toc-list">';

    foreach ($tree as $h2) {
        $t = function_exists('esc_html') ? esc_html($h2['text']) : htmlspecialchars($h2['text'], ENT_QUOTES, 'UTF-8');
        $toc .= '<li class="wp-toc-h2"><a href="#' . $h2['id'] . '">' . $t . '</a>';
        if (!empty($h2['children'])) {
            $toc .= '<ul class="wp-toc-sublist">';
            foreach ($h2['children'] as $h3) {
                $t3 = function_exists('esc_html') ? esc_html($h3['text']) : htmlspecialchars($h3['text'], ENT_QUOTES, 'UTF-8');
                $toc .= '<li class="wp-toc-h3"><a href="#' . $h3['id'] . '">' . $t3 . '</a></li>';
            }
            $toc .= '</ul>';
        }
        $toc .= '</li>';
    }

    $toc .= '</ul></div></details></div>';

    // Volver a sacar el contenido procesado
    $wrap = $xp->query('//*[@id="__toc_wrap"]')->item(0);
    $contenido_procesado = '';
    foreach ($wrap->childNodes as $child) {
        $contenido_procesado .= $dom->saveHTML($child);
    }

    // Insertar TOC al inicio del contenido (quedará debajo del H1 del tema)
    return $toc . $contenido_procesado;
}
add_filter('the_content', 'mi_toc_sin_plugin', 20);


// *****************************************************************
//        SISTEMA DE HISTÓRICO Y RASTREO PARA MARKETING (Vía Inyección JS)
// *****************************************************************

/**
 * 1. Guardar los campos personalizados en los metadatos de la reserva
 * Nota: Los campos se inyectan vía JS en el footer.
 */
function ec_save_custom_booking_meta($booking) {
    $booking_id = is_numeric($booking) ? $booking : $booking->ID;

    $source = isset($_COOKIE['booking_source']) ? sanitize_text_field($_COOKIE['booking_source']) : 'Web Principal';
    $how_hear = isset($_COOKIE['how_hear']) ? sanitize_text_field($_COOKIE['how_hear']) : 'No indicado';

    update_post_meta($booking_id, 'booking_source', $source);
    update_post_meta($booking_id, 'how_hear', $how_hear);
}
add_action('rtb_insert_booking', 'ec_save_custom_booking_meta');

/**
 * 2. Guardar copia en tabla independiente wp_marketing_leads
 */
function ec_log_to_marketing_history($booking) {
    global $wpdb;
    
    $table_name = $wpdb->prefix . 'marketing_leads';
    $booking_id = is_numeric($booking) ? $booking : $booking->ID;
    
    // Recopilamos datos (probamos meta primero, si no, directo de POST)
    $nombre   = get_the_title($booking_id);
    $email    = get_post_meta($booking_id, 'email', true) ?: (isset($_POST['rtb-email']) ? sanitize_email($_POST['rtb-email']) : '');
    $telefono = get_post_meta($booking_id, 'phone', true) ?: (isset($_POST['rtb-phone']) ? sanitize_text_field($_POST['rtb-phone']) : '');
    $personas = get_post_meta($booking_id, 'party', true) ?: (isset($_POST['rtb-party']) ? intval($_POST['rtb-party']) : 0);
    $fecha    = get_post_meta($booking_id, 'date', true) ?: (isset($_POST['rtb-date']) ? sanitize_text_field($_POST['rtb-date']) : '');
    
    $origen   = isset($_COOKIE['booking_source']) ? sanitize_text_field($_COOKIE['booking_source']) : 'Web Principal';
    $conocio  = isset($_COOKIE['how_hear']) ? sanitize_text_field($_COOKIE['how_hear']) : 'No indicado';

    $wpdb->insert(
        $table_name,
        array(
            'nombre'           => $nombre,
            'email'            => $email,
            'telefono'         => $telefono,
            'fecha_reserva'    => $fecha,
            'personas'         => $personas,
            'origen'           => $origen,
            'como_nos_conocio' => $conocio
        ),
        array('%s', '%s', '%s', '%s', '%d', '%s', '%s')
    );
}
add_action('rtb_insert_booking', 'ec_log_to_marketing_history', 20);

// Panel de administración de leads de marketing
require_once get_template_directory() . '/inc/admin-leads.php';


// Evitar que WordPress busque actualizaciones de este tema en el repositorio oficial
add_filter('http_request_args', function ($args, $url) {
    if (strpos($url, 'api.wordpress.org/themes/update-check') !== false) {
        $themes = json_decode($args['body']['themes']);
        unset($themes->themes->{get_option('template')});
        unset($themes->themes->{get_option('stylesheet')});
        $args['body']['themes'] = json_encode($themes);
    }
    return $args;
}, 10, 2);
