<?php get_header();?>

<main id="home-page" class="home">



<div id="page-loader"><span class="preloader-interior"></span></div>


    <!-- <div id="hero">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>                
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/img01.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/img02.jpg" class="d-block w-100" alt="...">
                </div>                
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div> -->


    <div aria-label="Video principal de la página donde se muestra el horno y el tipo de cocina que ofrece Restaurante Estilo Campo. Esta sección también incluye un botón para poder realizar una reserva." class="hero">
            <div class="col-12 overlay__section">
                <div class='line'>
                    <h1 class="cl__tr">Asador Argentino en Fuengirola</h1>
                    <h2 class="title__overlay lineUp">"Un aplauso para el asador"</h2>
                </div>
                <h3 class="title__overlay">GASTRONOMÍA ARGENTINA EN ESTADO PURO</h3>
            </div>
       
            <div class="col-12 d-flex justify-content-center video__background">
            
                <video class="header-video" width="800" height="500" loop autoplay muted>
                        <source src="<?php echo get_stylesheet_directory_uri(); ?>/video/estilo-campo-video.mp4" type="video/mp4">
                        <source src="<?php echo get_stylesheet_directory_uri(); ?>/video/estilo-campo-video.ogg" type="video/ogg">    
                        <!-- <track src="<?php echo get_stylesheet_directory_uri(); ?>/video/video01.vtt" kind="captions" srclang="es" label="spanish_captions"> -->
                        <!-- <track label="Español" kind="subtitles" srclang="es" src="<?php echo get_stylesheet_directory_uri(); ?>/video/video01.vtt" kind="captions" default />                         -->
                        Your browser does not support the video tag.
                </video>

                <!-- <div id="video-controls" class="controls hide" data-state="hidden">
                    <button id="playpause" type="button" data-state="play">Play/Pause</button>
                    <button id="stop" type="button" data-state="stop">Stop</button>
                    <div class="progress">
                        <progress id="progress" value="0" min="0">
                        <span id="progress-bar"></span>
                        </progress>
                    </div>
                    <button id="mute" type="button" data-state="mute">Mute/Unmute</button>
                    <button id="volinc" type="button" data-state="volup">Vol+</button>
                    <button id="voldec" type="button" data-state="voldown">Vol-</button>
                    <button id="fs" type="button" data-state="go-fullscreen">Fullscreen</button>
                    <button id="subtitles" type="button" data-state="subtitles">CC</button>
                </div> -->




            </div>

            <div>
                <a href="https://estilocampo.net/reservations" class="btn btn-primary" role="button">RESERVAR</a>
            </div>
       
    </div>

    <!-- INICIO: Carrusel de Texto de Bienvenida -->
    <div class="welcome-carousel">
        <div class="welcome-carousel__track">
            <span class="welcome-carousel__text">BIENVENIDO · WELCOME · CROESO · FÀILTE · VÄLKOMMEN · VELKOMMEN · VELKOMIÐ · TERVETULOA · BIENVENUE · WILLKOMMEN · VÍTEJTE · WELKOM · BIENVENIDO · WELCOME · CROESO · FÀILTE · VÄLKOMMEN · VELKOMMEN · VELKOMIÐ · TERVETULOA · BIENVENUE · WILLKOMMEN · VÍTEJTE · WELKOM ·</span>
            <span class="welcome-carousel__text">BIENVENIDO · WELCOME · CROESO · FÀILTE · VÄLKOMMEN · VELKOMMEN · VELKOMIÐ · TERVETULOA · BIENVENUE · WILLKOMMEN · VÍTEJTE · WELKOM · BIENVENIDO · WELCOME · CROESO · FÀILTE · VÄLKOMMEN · VELKOMMEN · VELKOMIÐ · TERVETULOA · BIENVENUE · WILLKOMMEN · VÍTEJTE · WELKOM ·</span>            
        </div>
    </div>
    <!-- FIN: Carrusel de Texto de Bienvenida -->



    

    <section aria-label="Presentación con texto de los servicios que ofrece Restaurante Estilo Campo" class="section-one">

        <div class="row">
            <div class="col-12 group-title-cta">
                <div class="ornament__title d-flex flex-row align-items-center justify-content-center">
                    <!-- <span class="material-symbols-outlined">horizontal_rule</span>    -->
                    <h2 class="home__title"><?php echo do_shortcode(the_field('titulo_principal')); ?></h2> 
                    <!-- <h3>CARNE A LA PARRILLA</h3> -->
                    <!-- <span class="material-symbols-outlined">horizontal_rule</span> -->
                </div>
                <!-- <h4>Restaurante Argentino en Fuengirola</h4> -->
                <!-- <h5 class="generic-paragraph">Nuestro equipo de expertos parrilleros te deleitará con su destreza en la preparación de suculentos cortes, ofreciéndote una experiencia culinaria inigualable.</h5> -->
                <!-- <p class="generic-paragraph cta"><strong>¡Ven y déjate seducir por la esencia argentina en cada bocado!</strong></p> -->

               
            </div>
        </div>

        <div class="row custom__ec__style">


            <div class="col-12">

                <p class="generic-paragraph mb-5 w-lateral-margins">Somos una auténtica parrilla argentina con más de 20 años de trayectoria en la Costa del Sol.
                    Todos los días nuestros <strong>maestros parrilleros</strong> encienden el fuego para fusionar el sabor de una de las mejores carnes del mundo con el arte de las brasas.</p>

            </div>



            <div class="col-12 img__wrap__col">
                <figure>
                    <img src="https://estilocampo.net/wp-content/uploads/2023/07/2023_Estilo-Campo_WEB_1.jpg" class="estilo__campo__img" alt="Parrillada imagen artística gastronómica del restaurante">
                </figure>

            </div>

            <div class="col-12">

                <p class="generic-paragraph ec__style w-lateral-margins"><strong>¿Hace falta mostrarte algo más para que te decidas a venir a <span class="ec__brand">Estilo Campo</span>?</strong></p>

            </div>
        </div>
        
    </section>

                                   


    <section aria-label="Sección en la que se presenta en una foto el tipo de corte y se decribe el tipo de producto animal usado para el servicio y como ha sido criado" class="section-two">

        <div class="row">
            <div class="col-12 img__wrap__col">
                <figure>
                    <img src="https://estilocampo.net/wp-content/uploads/2023/08/2023_Estilo-Campo_WEB_8.jpg" class="estilo__campo__img" alt="Parrillero sosteniendo pieza de vaca preparada para cocinar en la parrilla">
                </figure>

                <p class="generic-paragraph w-lateral-margins">Descubre nuestra selección de <strong>cortes de novillo de raza angus premium argentino</strong>. Criados y alimentados en libertad en la extensa <strong>llanura Pampeana</strong>.</p>

            </div>
        </div>
        
    </section>




    <section aria-label="Se muestra el producto cocinándose y el maestro culinario cortando la carne" class="section-three">
        <div class="row">
            <div class="col-md-6 img__wrap__col">
                <figure>
                    <img src="https://estilocampo.net/wp-content/uploads/2023/08/2023_Estilo-Campo_WEB_2.jpg" class="estilo__campo__img" alt="Carne cocinándose a la parrilla">
                </figure>

            </div>
            <div class="col-md-6 img__wrap__col">
                <figure>
                    <img src="https://estilocampo.net/wp-content/uploads/2023/08/2023_Estilo-Campo_WEB_10.jpg" class="estilo__campo__img" alt="Parrillero efectuando corte a la carne ya cocinada para servir">
                </figure>

            </div>
        </div>

        <div class="row">
        <div class="col-12">

            <p class="generic-paragraph mb-5 w-lateral-margins">Ven y disfruta de las extraordinarias cualidades que hacen que el angus argentino sea único: intensidad de sabor, terneza, jugosidad y su insuperable marmoleado.</p>

        </div>
            <!-- <div class="col-md-12 img__wrap__col">
              
                <h2>El corte perfecto. Calidad Premium.</h2>

            </div> -->
        </div>

        <div class="row">
            <div class="col-md-12 img__wrap__col">
              
                <figure>
                    <img src="https://estilocampo.net/wp-content/uploads/2023/09/vaca-ing_esp.png" class="estilo__campo__img cw__cut" alt="Dibujo de vaca que muestra los cortes que ofrece el restaurante">
                </figure>

            </div>
        </div>

            <div class="col-md-12 img__wrap__col">
              
                <h2 style="ec__style">Elige el corte ideal para ti. Auténtica Carne Argentina en Fuengirola.</h2>

                <p class="generic-paragraph mb-5 w-lateral-margins">Te ofrecemos variedad en cortes de animales de raza “angus” de alrededor de 2 años de edad,
                        denominados NOVILLO en Argentina, en su mayoria terneros machos de aproximadamente
                        450 kg., que luego de ser faenados, son rigurosamente tratados en la empresa frigorifica,
                        envasando sus piezas al vacio y correspondiente empaquetado ( normativa vigente para la
                        exportación a Europa catalogada como <strong>“CUOTA HILTON"</strong> ) para luego viajar durante unos 25 a
                        30 días en barco, en lo que también se entiende como un periodo conveniente de
                        "maduración húmeda"; de la carne , procedimiento que le aportará progesivamente mayor
                        terneza, conservando en fresco todas sus cualidades de sabor y jugosidad.</p>


            </div>

    </section>


    

    <section aria-label="Se muestran tres fotos siguien un orden de los servicios, primero entrantes, luego maridage y finalmente el postre" class="section-four">
        <div class="row">
            <div class="col-md-4 img__wrap__col">
                <figure>
                    <img src="https://estilocampo.net/wp-content/uploads/2023/08/2023_Estilo-Campo_WEB_3v2.jpg" class="estilo__campo__img" alt="Comensal con alimento en su mano de la tradicional cocina criolla">
                </figure>

                    <p class="generic-paragraph">En <strong><span class="ec__brand">Estilo Campo</span></strong> también encontrarás platos de nuestra <strong>tradicional cocina criolla</strong>, que darán comienzo a una <strong>experiencia 100% argentina</strong>.</p>

            </div> 

            <div class="col-md-4 img__wrap__col">
                <figure>
                    <img src="https://estilocampo.net/wp-content/uploads/2023/08/2023_Estilo-Campo_WEB_11.jpg" class="estilo__campo__img" alt="Comensal sosteniendo copa de vino">
                </figure>

                    <p class="generic-paragraph"><span class="ec__brand bgr">El maridaje perfecto</span>. <br/><strong>Carne argentina</strong> y <strong>vino argentino</strong>.</p>
                    <a href="https://estilocampo.net/maridaje-perfecto/" class="btn btn-primary" role="button">Saber Más...</a>
            </div> 


            <div class="col-md-4 img__wrap__col">
                <figure>
                    <img src="https://estilocampo.net/wp-content/uploads/2023/08/2023_Estilo-Campo_WEB_5v2.jpg" class="estilo__campo__img" alt="Muestra de un pedazo de postre típico argentino">
                </figure>

                    <p class="generic-paragraph"><strong>Imprescindible un dulce final.</strong></p>

            </div> 

            
        </div>
        
    </section>



    
    <section aria-label="Se muestra el producto cocinándose y el maestro culinario cortando la carne" class="section-five">
        <div class="row">
            <div class="col-md-6 img__wrap__col">
                <figure>
                    <img src="https://estilocampo.net/wp-content/uploads/2023/08/2023_Estilo-Campo_WEB_12.jpg" class="estilo__campo__img" alt="Comensales brindando y riendo alrededor de la mesa antes de empezar a comer">
                </figure>

            </div>
            <div class="col-md-6 img__wrap__col">
                <figure>
                    <img src="https://estilocampo.net/wp-content/uploads/2023/08/2023_Estilo-Campo_WEB_14.jpg" class="estilo__campo__img" alt="Chico y chica riendo durante la comida en restaurante Estilo Campo">
                </figure>

            </div>
        </div>

        <div class="row">
            <div class="col-12 img__wrap__col">
                <p class="generic-paragraph w-lateral-margins">Comparte esta experiencia con amigos y familia, donde no deben faltar anécdotas, risas y alegría. <br/><strong>Tradición argentina que se celebra con un buen asado y un buen vino</strong>.</p>
            </div>
        </div>

    </section>



    <section aria-label="Sección que incluye el formulario de contacto para que el usuario pueda reservar con nosotros" class="section-eight">


        <div class="row">
            <div class="col-12 img__wrap__col">
                <figure>
                    <img src="https://estilocampo.net/wp-content/uploads/2023/08/2023_Estilo-Campo_WEB_7.jpg" class="estilo__campo__img" alt="Costillar crudo colgado sobre la parrilla con cuchillo de Estilo Campo">
                </figure>

            </div>           
        </div>

        <div class="row">
            <div class="col-12 img__wrap__col">

                <h2 style="ec__style">¿Te decidiste a reservar en nuestra parrilla argentina en Fuengirola?</h2>
              
                <p class="generic-paragraph w-lateral-margins">Del campo a la parrilla. PURA ESENCIA CRIOLLA.</p>

                <h3>¡BIENVENIDOS A <span class="ec__brand">ESTILO CAMPO</span> FUENGIROLA!</h3>

                
                    <div class="col-12 wrap__reservations__final">
                        <a href="https://estilocampo.net/reservations/" class="btn-reserva">
                            RESERVAS ONLINE
                        </a>
                    </div>
                
            </div>
        </div>




         


    </section>
















</main>






<?php get_footer();?>