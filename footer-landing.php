<footer class="lp__footer-minimal">
    <div class="container text-center">
        <!-- Logo Footer -->
        <div class="lp__footer-logo-wrap">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" class="lp__footer-logo">
        </div>

        <!-- Redes Sociales -->
        <div class="lp__footer-social">
            <a href="https://www.facebook.com/estilocampofuengirola" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/estilocampo.es" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        </div>

        <!-- Enlaces Legales -->
        <nav class="lp__footer-legal">
            <a href="/accesibilidad">Accesibilidad</a> | 
            <a href="/aviso-legal">Aviso Legal</a> | 
            <a href="/politica-de-privacidad">Política de Privacidad</a> | 
            <a href="/politica-de-cookies">Política de Cookies</a>
        </nav>

        <hr class="lp__footer-divider">

        <!-- Copyright y Créditos -->
        <div class="lp__footer-bottom">
            <div class="row">
                <div class="col-6 text-start">
                    <p>Copyright <?php echo date('Y'); ?> estilocampo.net</p>
                </div>
                <div class="col-6 text-end">
                    <p>Created by: <a href="https://masiacode.com" target="_blank">masiacode.com</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script>
jQuery(document).ready(function($) {
    // Forzamos la aplicación de los textos del script original en la landing
    // Esto asegura que funcione aunque el detector de idioma por URL falle
    
    var aviso1 = "<label class='emphasis-io menu__timetable'>Las reservas tienen una tolerancia de 15 minutos. Si no puedes asistir o vas a llegar tarde, por favor avísanos al +34 648 05 79 53.</label>";
    var aviso2 = "<label class='emphasis-io'>Para reservas de más de 15 personas, contactar al +34 648 05 79 53</label>";
    var aviso3 = "<p class='emphasis-io'>INTRODUZCA SU CÓDIGO PROMOCIONAL.</p>";
    var aviso4 = "<p class='emphasis-io'>CÓDIGO para añadir a su reserva.</p>";

    // Inyectamos con un pequeño delay para asegurar que el plugin haya cargado el form
    setTimeout(function() {
        if ($(".reservation legend").length) {
            // Solo inyectamos si no se ha inyectado ya
            if (!$(".reservation .menu__timetable").length) {
                $(".reservation legend").after(aviso1);
                $(".rtb-select.party label").after(aviso2);
                $('.add-message a').html(aviso3);    
                $('.rtb-textarea.message label').html(aviso4);
            }
        }
    }, 500);
    
});
</script>

</body>
</html>
