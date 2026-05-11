<footer class="lp__footer-minimal">
    <div class="container text-center">
        <!-- Logo Footer -->
        <div class="lp__footer-logo-wrap">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" class="lp__footer-logo">
        </div>

        <!-- Redes Sociales -->
        <div class="lp__footer-social buttons">
            <a href="https://www.facebook.com/Estilocampo.es/" target="_blank"><img src="https://estilocampo.net/wp-content/uploads/2023/08/face-white.png" alt="Logo Facebook" width="30" height="29"></a>
            <a href="https://www.instagram.com/estilocampo.es" target="_blank"><img src="https://estilocampo.net/wp-content/uploads/2023/08/instagram-white.png" alt="Logo Instagram" width="30" height="29"></a>
        </div>

        <!-- Enlaces Legales -->
        <div class="row w-border legal__area">
            <div class="d-md-none col-md-12 d-sm-flex flex-column justify-content-center">
                <a href="https://estilocampo.net/accesibilidad/">Accesibilidad</a>
                <a href="https://estilocampo.net/politica-de-privacidad/">Aviso Legal</a> 
                <a href="https://estilocampo.net/politica-privacidad/">Política de Privacidad</a>
                <a href="https://estilocampo.net/politica-de-cookies/">Política de Cookies</a>
                 
                
            </div>
            <div class="d-none d-sm-none col-md-12 d-md-flex flex-row justify-content-center">
                <a href="https://estilocampo.net/accesibilidad/">Accesibilidad</a><p>&nbsp;|&nbsp;</p>    
                <a href="https://estilocampo.net/politica-de-privacidad/">Aviso Legal</a> <p>&nbsp;|&nbsp;</p>
                <a href="https://estilocampo.net/politica-privacidad/">Política de Privacidad</a><p>&nbsp;|&nbsp;</p>
                <a href="https://estilocampo.net/politica-de-cookies/">Política de Cookies</a>
                
                
            </div>
        </div>

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

    // Forzar margin del recaptcha
    setTimeout(function() {
        if ($('#rtb_recaptcha').length) {
            $('#rtb_recaptcha').get(0).style.setProperty('margin', '9px 0', 'important');
        }
    }, 1000);
    
});
</script>

</body>
</html>
