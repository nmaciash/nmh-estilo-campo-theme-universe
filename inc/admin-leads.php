<?php
/**
 * Panel de administración de leads de marketing.
 * Tabla: wp_marketing_leads
 * Campos: id, nombre, email, telefono, fecha_reserva (DATETIME string 'YYYY-MM-DD HH:MM:SS'),
 *         personas, origen, como_nos_conocio, fecha_registro (TIMESTAMP de inserción)
 */

if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'admin_menu', 'ec_register_leads_menu' );
add_action( 'admin_init', 'ec_leads_handle_export' );
add_action( 'admin_enqueue_scripts', 'ec_leads_enqueue_styles' );

function ec_leads_enqueue_styles( $hook ) {
    if ( $hook !== 'toplevel_page_ec-leads' ) return;
    wp_enqueue_style(
        'ec-admin-leads',
        get_template_directory_uri() . '/assets/css/admin-leads.css',
        [],
        '1.0'
    );
}

// ---------------------------------------------------------------------------
// Registro del menú
// ---------------------------------------------------------------------------

function ec_register_leads_menu() {
    add_menu_page(
        'Leads de Marketing',
        'Leads Marketing',
        'manage_options',
        'ec-leads',
        'ec_render_leads_page',
        'dashicons-groups',
        30
    );
}

// ---------------------------------------------------------------------------
// Lectura y sanitización de filtros (compartida entre export y render)
// ---------------------------------------------------------------------------

function ec_leads_get_filters() {
    return [
        'buscar'      => isset( $_GET['buscar'] )            ? sanitize_text_field( $_GET['buscar'] )           : '',
        'origen'      => isset( $_GET['origen'] )            ? sanitize_text_field( $_GET['origen'] )           : '',
        'conocio'     => isset( $_GET['como_nos_conocio'] )  ? sanitize_text_field( $_GET['como_nos_conocio'] ) : '',
        'fecha_desde' => isset( $_GET['fecha_desde'] )       ? sanitize_text_field( $_GET['fecha_desde'] )      : '',
        'fecha_hasta' => isset( $_GET['fecha_hasta'] )       ? sanitize_text_field( $_GET['fecha_hasta'] )      : '',
    ];
}

// ---------------------------------------------------------------------------
// Construcción de cláusula WHERE y args para $wpdb->prepare()
// ---------------------------------------------------------------------------

function ec_leads_build_where( array $f ) {
    global $wpdb;

    $where = 'WHERE 1=1';
    $args  = [];

    if ( $f['buscar'] !== '' ) {
        $like   = '%' . $wpdb->esc_like( $f['buscar'] ) . '%';
        $where .= ' AND (nombre LIKE %s OR email LIKE %s OR telefono LIKE %s)';
        $args[] = $like;
        $args[] = $like;
        $args[] = $like;
    }

    if ( $f['origen'] !== '' ) {
        $where .= ' AND origen = %s';
        $args[] = $f['origen'];
    }

    if ( $f['conocio'] !== '' ) {
        $where .= ' AND como_nos_conocio = %s';
        $args[] = $f['conocio'];
    }

    // fecha_reserva se almacena como string 'YYYY-MM-DD HH:MM:SS'
    // El input date del filtro devuelve 'YYYY-MM-DD', completamos la hora para el rango
    if ( $f['fecha_desde'] !== '' ) {
        $where .= ' AND fecha_reserva >= %s';
        $args[] = $f['fecha_desde'] . ' 00:00:00';
    }

    if ( $f['fecha_hasta'] !== '' ) {
        $where .= ' AND fecha_reserva <= %s';
        $args[] = $f['fecha_hasta'] . ' 23:59:59';
    }

    return [ 'where' => $where, 'args' => $args ];
}

// ---------------------------------------------------------------------------
// Helper: formatea fecha_reserva para mostrar (de 'YYYY-MM-DD HH:MM:SS' a 'DD/MM/YYYY')
// ---------------------------------------------------------------------------

function ec_leads_format_fecha( $raw ) {
    if ( empty( $raw ) || $raw === '0000-00-00 00:00:00' ) return '—';
    $ts = strtotime( $raw );
    return $ts !== false ? date( 'd/m/Y', $ts ) : esc_html( $raw );
}

// ---------------------------------------------------------------------------
// Exportación CSV (se ejecuta en admin_init, antes de cualquier output HTML)
// ---------------------------------------------------------------------------

function ec_leads_handle_export() {
    if ( ! isset( $_GET['page'] ) || $_GET['page'] !== 'ec-leads' ) return;
    if ( ! isset( $_GET['exportar'] ) || $_GET['exportar'] !== '1' ) return;
    if ( ! current_user_can( 'manage_options' ) ) wp_die( 'Sin permisos.' );

    global $wpdb;
    $table = $wpdb->prefix . 'marketing_leads';
    $f     = ec_leads_get_filters();
    $w     = ec_leads_build_where( $f );
    $sql   = "SELECT * FROM {$table} {$w['where']} ORDER BY id DESC";

    if ( ! empty( $w['args'] ) ) {
        $leads = $wpdb->get_results( $wpdb->prepare( $sql, $w['args'] ) );
    } else {
        $leads = $wpdb->get_results( $sql );
    }

    $filename = 'leads-estilo-campo-' . date( 'Y-m-d' ) . '.csv';
    header( 'Content-Type: text/csv; charset=utf-8' );
    header( 'Content-Disposition: attachment; filename="' . $filename . '"' );
    header( 'Pragma: no-cache' );
    header( 'Expires: 0' );

    $out = fopen( 'php://output', 'w' );

    // BOM UTF-8 para que Excel en Windows no rompa las tildes
    fprintf( $out, chr(0xEF) . chr(0xBB) . chr(0xBF) );

    fputcsv( $out, [
        'ID', 'Nombre', 'Email', 'Teléfono',
        'Fecha Reserva', 'Personas', 'Origen', 'Cómo nos conoció', 'Fecha captura',
    ], ';' );

    foreach ( $leads as $lead ) {
        fputcsv( $out, [
            $lead->id,
            $lead->nombre,
            $lead->email,
            $lead->telefono,
            ec_leads_format_fecha( $lead->fecha_reserva ),
            $lead->personas,
            $lead->origen,
            $lead->como_nos_conocio,
            isset( $lead->fecha_registro ) ? ec_leads_format_fecha( $lead->fecha_registro ) : '',
        ], ';' );
    }

    fclose( $out );
    exit;
}

// ---------------------------------------------------------------------------
// Renderizado del panel
// ---------------------------------------------------------------------------

function ec_render_leads_page() {
    if ( ! current_user_can( 'manage_options' ) ) return;

    global $wpdb;
    $table = $wpdb->prefix . 'marketing_leads';
    $f     = ec_leads_get_filters();
    $w     = ec_leads_build_where( $f );

    // Paginación
    $per_page = 20;
    $paged    = max( 1, isset( $_GET['paged'] ) ? intval( $_GET['paged'] ) : 1 );
    $offset   = ( $paged - 1 ) * $per_page;

    // Total filtrado (para paginación)
    $count_sql = "SELECT COUNT(*) FROM {$table} {$w['where']}";
    if ( ! empty( $w['args'] ) ) {
        $total = (int) $wpdb->get_var( $wpdb->prepare( $count_sql, $w['args'] ) );
    } else {
        $total = (int) $wpdb->get_var( $count_sql );
    }

    // Registros de la página actual
    $data_args = array_merge( $w['args'], [ $per_page, $offset ] );
    $data_sql  = "SELECT * FROM {$table} {$w['where']} ORDER BY id DESC LIMIT %d OFFSET %d";
    $leads     = $wpdb->get_results( $wpdb->prepare( $data_sql, $data_args ) );

    // Estadísticas globales (sin filtros aplicados)
    $stats_total   = (int) $wpdb->get_var( "SELECT COUNT(*) FROM {$table}" );
    $stats_landing = (int) $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM {$table} WHERE origen = %s", 'Landing Promo' ) );
    $stats_web     = (int) $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM {$table} WHERE origen = %s", 'Web Principal' ) );

    // Valores distintos del campo cómo nos conoció para el select de filtro
    $conocio_options = $wpdb->get_col( "SELECT DISTINCT como_nos_conocio FROM {$table} ORDER BY como_nos_conocio ASC" );

    // URL base preservando filtros activos (sin paged ni exportar)
    $base_url = add_query_arg(
        array_filter( [
            'page'             => 'ec-leads',
            'buscar'           => $f['buscar'],
            'origen'           => $f['origen'],
            'como_nos_conocio' => $f['conocio'],
            'fecha_desde'      => $f['fecha_desde'],
            'fecha_hasta'      => $f['fecha_hasta'],
        ] ),
        admin_url( 'admin.php' )
    );

    $export_url  = add_query_arg( 'exportar', '1', $base_url );
    $total_pages = (int) ceil( $total / $per_page );

    ?>
    <div class="wrap ec-leads-wrap">

        <h1 class="wp-heading-inline">Leads de Marketing — Estilo Campo</h1>
        <hr class="wp-header-end">

        <!-- Tarjetas resumen -->
        <div class="ec-stat-cards">
            <div class="ec-stat-card">
                <p class="ec-stat-card__label">Total leads</p>
                <p class="ec-stat-card__value"><?php echo $stats_total; ?></p>
            </div>
            <div class="ec-stat-card landing">
                <p class="ec-stat-card__label">Landing Promo</p>
                <p class="ec-stat-card__value"><?php echo $stats_landing; ?></p>
            </div>
            <div class="ec-stat-card web">
                <p class="ec-stat-card__label">Web Principal</p>
                <p class="ec-stat-card__value"><?php echo $stats_web; ?></p>
            </div>
        </div>

        <!-- Filtros -->
        <form method="get" action="" class="ec-filters">
            <input type="hidden" name="page" value="ec-leads">

            <div class="ec-filters-row">
                <input type="search" name="buscar"
                       value="<?php echo esc_attr( $f['buscar'] ); ?>"
                       placeholder="&#128269; Nombre, email o teléfono">

                <select name="origen">
                    <option value="">Todos los orígenes</option>
                    <option value="Landing Promo" <?php selected( $f['origen'], 'Landing Promo' ); ?>>Landing Promo</option>
                    <option value="Web Principal" <?php selected( $f['origen'], 'Web Principal' ); ?>>Web Principal</option>
                </select>

                <select name="como_nos_conocio">
                    <option value="">Todos los canales</option>
                    <?php foreach ( $conocio_options as $opt ) : ?>
                        <option value="<?php echo esc_attr( $opt ); ?>" <?php selected( $f['conocio'], $opt ); ?>>
                            <?php echo esc_html( $opt ); ?>
                        </option>
                    <?php endforeach; ?>
                </select>

                <div class="ec-date-group">
                    Desde <input type="date" name="fecha_desde" value="<?php echo esc_attr( $f['fecha_desde'] ); ?>">
                    Hasta <input type="date" name="fecha_hasta" value="<?php echo esc_attr( $f['fecha_hasta'] ); ?>">
                </div>
            </div>

            <div class="ec-filters-actions">
                <div style="display:flex;gap:8px;">
                    <?php submit_button( 'Filtrar', 'primary', 'submit', false ); ?>
                    <a href="<?php echo esc_url( admin_url( 'admin.php?page=ec-leads' ) ); ?>" class="button">
                        Limpiar
                    </a>
                </div>
                <a href="<?php echo esc_url( $export_url ); ?>" class="button button-secondary">
                    &#8681;&nbsp; Exportar CSV <span style="color:#64748b;font-weight:400;">(<?php echo $total; ?> registros)</span>
                </a>
            </div>
        </form>

        <!-- Tabla -->
        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th scope="col" style="width:44px;">ID</th>
                    <th scope="col" style="width:220px;">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col" style="width:145px;">Teléfono</th>
                    <th scope="col" style="width:98px;">F. reserva</th>
                    <th scope="col" style="width:52px;">Pers.</th>
                    <th scope="col" style="width:130px;">Origen</th>
                    <th scope="col" style="width:160px;">Cómo nos conoció</th>
                    <th scope="col" style="width:98px;">F. captura</th>
                </tr>
            </thead>
            <tbody>
                <?php if ( empty( $leads ) ) : ?>
                    <tr>
                        <td colspan="9" style="text-align:center;padding:32px;color:#64748b;">
                            No se encontraron leads con los filtros aplicados.
                        </td>
                    </tr>
                <?php else : ?>
                    <?php foreach ( $leads as $lead ) :
                        $badge_class = ( $lead->origen === 'Landing Promo' ) ? 'ec-badge--landing' : 'ec-badge--web';
                    ?>
                    <tr>
                        <td style="color:#94a3b8;"><?php echo intval( $lead->id ); ?></td>
                        <td><strong><?php echo esc_html( $lead->nombre ); ?></strong></td>
                        <td style="word-break:break-all;"><?php echo esc_html( $lead->email ); ?></td>
                        <td><?php echo esc_html( $lead->telefono ); ?></td>
                        <td><?php echo esc_html( ec_leads_format_fecha( $lead->fecha_reserva ) ); ?></td>
                        <td style="text-align:center;"><?php echo intval( $lead->personas ); ?></td>
                        <td><span class="ec-badge <?php echo $badge_class; ?>"><?php echo esc_html( $lead->origen ); ?></span></td>
                        <td><?php echo esc_html( $lead->como_nos_conocio ); ?></td>
                        <td style="color:#94a3b8;"><?php echo isset( $lead->fecha_registro ) ? esc_html( ec_leads_format_fecha( $lead->fecha_registro ) ) : '—'; ?></td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th style="width:220px;">Nombre</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>F. reserva</th>
                    <th>Pers.</th>
                    <th>Origen</th>
                    <th>Cómo nos conoció</th>
                    <th>F. captura</th>
                </tr>
            </tfoot>
        </table>

        <!-- Paginación -->
        <?php if ( $total_pages > 1 ) : ?>
            <div class="tablenav bottom">
                <div class="tablenav-pages">
                    <span class="displaying-num"><?php echo $total; ?> elementos</span>
                    <?php
                    echo paginate_links( [
                        'base'      => add_query_arg( 'paged', '%#%', $base_url ),
                        'format'    => '',
                        'prev_text' => '&laquo;',
                        'next_text' => '&raquo;',
                        'total'     => $total_pages,
                        'current'   => $paged,
                    ] );
                    ?>
                </div>
            </div>
        <?php endif; ?>

    </div><!-- .ec-leads-wrap -->
    <?php
}
