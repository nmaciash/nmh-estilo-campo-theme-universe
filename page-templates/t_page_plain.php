<?php
/*
*  Template Name: Página Texto Plano
*/ 


get_header();
?>


<?php if ( have_posts() ) : the_post(); ?>

<section class="header__plain__text">
</section>

<section class="nm__container plain__text">
    <?php the_content(); ?>
</section>






<?php endif; ?>



<?php
get_footer(); 
?>