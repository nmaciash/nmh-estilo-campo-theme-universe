<?php
/*
Template Name: Página Plantilla Tratamiento
*/ 

get_header();
?>



<?php if ( have_posts() ) : the_post(); ?>



<?php // Declaring variables
    $custom = get_post_custom(); // Cargo en una variable todas las custom post values. Luego con la key, las puedo llamar
    ksort($custom); // Ordeno los elementos alfabéticamente
    $ID = get_the_ID(); // Obtengo el post_id (id de todos los post de la página en este caso) que utilizaré al llamar a la función para recuperar el meta_id de cada custom_post
    
    $page__title = get_the_title(); // Consigo el título y lo paso a una variable de modo que queda almacenado como 'string'. Le aplico Sanitize_title para que elimine la carpeta anterior cuando es un título traducido - por ejemplo (/en/Carillas dentales) es lo que aparece en la versión inglesa sin el sanitize_title
?>


<!-- Creo una consulta y la asigno a una variable donde filtro los post custom (campos personalizados) para trabajar sólo con los que se creen en la página y no utilizar los del sistema -->

<section class="treatment__hero">



    <div id="page-loader"><span class="preloader-interior"></span></div>




    <div class="nm-container w-img">
       

        <div class="barra">

                        
                        <h2>Menú <span class="chr__lowerCase white__text"><?php the_title(); ?></span></h2>
                        
                        
                         <!-- Construyo el menú de los tratamientos de la zona del cuerpo al que corresponde la página  -->
                         <?php 
                                   
                                    echo '<ul>';
                                    
                                    foreach ($custom as $key_1=>$val_1) {   // Le asigno el nombre $key_1 a la variable para no confundir la programación ya que más adelante vuelvo a utilizar este tipo de bucle para recorrer los post custom types
                                        
                                        if(str_contains($key_1, '_') === false ) { // Si no contiene _ significa que es uno de los campos personalizados en vez de uno del sistema
                                        
                                                    // Llamo a la función get_m_id_by_key creada en archivo functions.php para conseguir el meta_id - Le paso los dos argumentos de la función el $ID ó post_id (de la BD) y el $key_1 que es el meta_key
                                                    $meta_id = get_m_id_by_key( $ID, $key_1 ); 
                                                    
                                                    echo '<li>';
                                                    echo '<a href="' . $key_1 . '" id="' . $key_1 . '" class="treatment-link" data-attr-id="' . $meta_id . '" >' . $key_1 . '</a>';
                                                    echo '</li>';
                                        }
                                        

                                    }
                                    echo '</ul>';
                                    

                                    ?>

        </div>



        

        <?php $number_chr_title = strlen($page__title); ?> <!-- Cuento el número de caracteres del título de la página para luego realizar el bucle -->


        <div class="head__of__treatment">

            <div class="row">
                <div class="col-md-12 columna">

                    <div class="treatment__hero__top hero__section hero__top">
                        <div class="nm-container">
                            <h2 class="treatment__hero__title title-xxl" style="">
                                
                                <?php echo($page__title); ?> 


                            </h2>
                        </div>
                    </div>                                
                </div>
            </div>

            <div class="row bg__button">
                <div class="col-md-12 columna">
                    <button class="lateral-nav" type="button">
                        Selecciona el tratamiento
                    </button>
                </div>
            </div>

        </div>                            
                



        <div class="body__of__treatment">
            <div class="row">
                

                <div class="col-md-12 columna scrollable__content">
                                <div class="treatment-title title-xl white__text">
                                    <?php
                                        $counter = 0;                                
                                        foreach ($custom as $key_2=>$val_2) {                                    
                                                        

                                            if (str_contains($key_2, '_')) { // Sí el título contiene un guion bajo significa que es del sistema y lo descarto
                                                $counter = $counter - 1;     // La forma de descartarlo es que cada vez que encuentre un elemento que contenga el guión bajo, reste -1 a la variable counter, de modo que no sea 0
                                            }       
                                                        
                                            if( $counter === 0 ) {           // Si la variable $counter es igual a 0 significa que es el primer elementor sin _ y lo muestro
                                                ?>  
                                                        
                                            
                                            <h1><?php echo $key_2; ?></h1>                                       
                                                        
                                                    
                                                        
                                </div>

                                <div class="treatment-content">
                                    <div class="explanation"><?php echo $val_2[0]; ?></div>  <!-- Aquí llamo a la key del custom field -->
                                </div>




                                                        <?php    

                                                                }
                                                                
                                                            $counter = $counter + 1;

                                                            }

                                                        ?>


                                                                                            

                                            

                </div>


            </div>

        </div>


        <!-- Agregar dos imágenes a cada tratamiento además de la imagen de fondo -->












        <div class="row video__images">

            <div class="col-md-6 first-img columna">
                
                <img src="#" alt="">

            </div>


            <div class="col-md-6 second-img columna">
                
                <img src="#" alt="">
                    
            </div>

        </div>
















    </div>



</section>

<?php endif; ?>




<?php
get_footer(); 
?>