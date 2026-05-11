<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Restaurante Asador Argentino en Fuengirola</title> -->

    <title><?php wp_title(); ?></title>

    <?php wp_head();?>
    

    <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '591276419237038');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=591276419237038&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->


</head>
<body <?php body_class('universe-main-class');?>>



<header id="cp-header" class="">

    <div id="top" class="top-header-fix">

        <div class="row">
            <div class="col-1 esc_location">Fuengirola </div>
            <div class="col-1 esc_rrss">
                <a href="https://www.facebook.com/Estilocampo.es/" target="_blank">
                    <img src="https://estilocampo.net/wp-content/uploads/2023/09/face-black.png" class="rrss-icon" alt="Logo Facebook" width="30" height="20">
                </a>
                <a href="https://www.instagram.com/estilocampo.es/" target="_blank">
                    <img src="https://estilocampo.net/wp-content/uploads/2023/09/instagram-black.png" class="rrss-icon" alt="Logo Instagram" width="30" height="20">
                </a>
            </div>
            <div class="col-3 wrap__address">
                <div class="col-12 esc_address">c/Moncayo,7</div>
                <div class="col-12 esc_address">Calle del Hambre - Fish Alley</div>
            </div>
            <div class="col-2 wrap__timeline">
                <!-- <div class="col-12 esc_timeline">Lun-Vie 16:00-23:30</div> -->
                <!-- <div class="col-12 esc_timeline">Sab-Dom 14:00-23:30</div> -->
                <div class="col-12 esc_timeline">Lun-Dom 16:30-23:30</div>
            </div>

            <div class="col-2 wrap__reservations">
                <div class="col-6 esc_top_reservations"><a href="https://estilocampo.net/reservations/">RESERVAS <br/> ONLINE</a></div>
            </div>

            <div class="col-2 wrap__reservations">
                <div class="col-12 esc_phone">Otras Consultas: <br/> +34 648 05 79 53</div>
            </div>
            
        </div>

    </div>



    <nav class="nm-nav">

        <div class="logo-container">
               

                <?php
                    if ( has_custom_logo () ) {
                        the_custom_logo();
                    } else {
                ?>

                    <a class="navbar-brand site-title" href="<?= get_home_url()?>">
                        <?php bloginfo('name'); ?>
                    </a>
                    
                <?php
                    }
                ?>


               

        </div>

        <input type="checkbox" id="check">
        
        <label aria-labelledby="check" for="check" class="hamburger-btn">
            <!-- <div class="nav__label"> -->
                    <span class="line1__bars-menu"></span>
                    <span class="line2__bars-menu"></span>
                    <span class="line3__bars-menu"></span>
        
            <!-- </div> -->
        </label>    
        
        <?php 
            wp_nav_menu(
                array(
                    'theme_location' => 'main-menu',
                    'container' => 'ul',
                    'menu_class' => 'nav-list',
                    'add_li_class' => 'active'
                )
                );
        ?>
        
    </nav>
    

</header>
 




