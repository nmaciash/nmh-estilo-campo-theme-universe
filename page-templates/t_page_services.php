<?php
/*
Template Name: Página Plantilla Servicios
*/ 

get_header();
?>


<?php if ( have_posts() ) : the_post(); ?>

    <?php // Declaring variables
        $customServ = get_post_custom(); // Cargo en una variable todas las custom post values. Luego con la key, las puedo llamar
        ksort($customServ); // Ordeno los elementos alfabéticamente

        $ID_Serv = get_the_ID(); // Obtengo el post_id (id de todos los post de la página en este caso) que utilizaré al llamar a la función para recuperar el meta_id de cada custom_post
        
        $page__title__serv = get_the_title(); // Consigo el título y lo paso a una variable

        // Variables para el tamaño de fuente del h1
        $font_size_title = 0;
    ?>

    <section class="service__hero">

        <div id="page-loader"><span class="preloader-interior"></span></div>


        <?php $number_chr_title_serv = strlen($page__title__serv); ?> <!-- Cuento el número de caracteres del título de la página para luego realizar el bucle -->

        <div class="nm-container w-img">           

            <div class="row">
                <div class="col-md-12 columna">

                    <div class="service__hero__top hero__section hero__top">
                        <div class="nm-container">
                            <?php
                            if ($number_chr_title_serv > 10 ) {
                                $font_size_title = 5;
                            } else {
                                $font_size_title = 6;
                            }
                            ?> 

                            <h1 id='<?php echo("$page__title__serv") ?>' class="service__hero__title title-xxl" style="font-size:<?php echo $font_size_title ?>rem;">  <!-- Añado el tamaño de la fuente en función de la variable y la extensión del título -->
    


                            <?php echo($page__title__serv); ?> 



                            </h1>
                        </div>                                    
                    </div>   

                    <div class="service__hero__bottom hero__section hero__bottom">
                        <div>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>




            <div class="row video__images">

                <div class="col-md-6 first-img columna">
                    
                        <!-- En el caso de imagen -->
                        <?php
                        
                            if( empty($customServ["imagen01"][0])) {
                                // do nothing
                            } else {                                       
                        
                        ?>
                                                                
                                <img src="<?php echo($customServ["imagen01"][0]); ?>" alt="">
                        
                        <?php
                            }
                        ?>

                        
                        <!-- En el caso de video -->
                        <?php
                        
                            if( empty($customServ["video01"][0])) {
                                // do nothing
                            } else {                                       
                        
                        ?>
                                                                
                            <video autoplay loop muted playsinline>
                                <source src="<?php echo($customServ["video01"][0]); ?>" type="video/mp4">
                            </video>
                        
                        <?php
                            }
                        ?>

                </div>


                <div class="col-md-6 second-img columna">

                        <?php
                        
                            if( empty($customServ["imagen02"][0])) {
                                // do nothing
                            } else {

                        ?>
                        
                                <img src="<?php echo($customServ['imagen02'][0]); ?>" alt="">
                        
                        <?php
                            }
                        ?>
                </div>

            </div>

        </div>


    </section>


<?php endif; ?>



<?php
get_footer(); 
?>