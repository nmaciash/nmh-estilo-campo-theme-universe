<?php
/*
 * Template Name: Página Landing Promo
 */

get_header('landing');
?>

<!-- ====== BANNER PROMO ====== -->
<div class="lp__promo-banner">
    <p>¡<strong>PROMOCIÓN</strong> POR TIEMPO LIMITADO! Haz una reserva para 4 personas y conseguirás una <strong>botella
            de vino Malbec</strong> gratis</p>
</div>

<!-- ====== HERO ====== -->
<section class="lp__hero">
    <div class="lp__hero-overlay"></div>
    <div class="lp__hero-content">
        <h1 class="lp__hero-title">Auténtico Asador Argentino</h1>
        <p class="lp__hero-address">C/Moncayo,7 &nbsp;·&nbsp; Calle del Hambre &nbsp;·&nbsp; Fish Alley</p>
    </div>

    <!-- FORMULARIO DE RESERVA superpuesto -->
    <div class="lp__form-card">
        <?php
        if (function_exists('rtb_print_booking_form')) {
            echo rtb_print_booking_form();
        }
        ?>

        <div class="lp__how-hear-wrap">
            <label for="lp-how-hear" class="lp__how-hear-label">¿Cómo nos conoció? *</label>
            <select id="lp-how-hear" class="lp__how-hear-select">
                <option value="">Seleccione una opción...</option>
                <option value="Redes Sociales">Redes Sociales</option>
                <option value="Instagram">Instagram</option>
                <option value="Facebook">Facebook</option>
                <option value="Periódico / Revista">Periódico / Revista</option>
                <option value="Recomendación">Recomendación de un amigo</option>
                <option value="Otros">Otros</option>
            </select>
        </div>
    </div>
</section>

<!-- ====== SECCIÓN INSTAGRAM ====== -->
<section class="lp__social-section">
    <div class="container">
        <h2 class="lp__social-title">Síguenos en Instagram <strong>@estilocampo.es</strong></h2>
        <div class="lp__social-placeholder">
            <!-- Aquí puedes pegar el shortcode de tu plugin de Instagram -->
            <?php echo do_shortcode('[instagram-feed]'); ?>
        </div>
    </div>
</section>

<?php get_footer('landing'); ?>