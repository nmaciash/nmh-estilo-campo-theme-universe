<?php
/* Template Name: Custom Blog Page */

get_header();
?>

<main id="main" class="blog__content content-wrapper">

    <?php
    // WP_Query arguments
    $args = array (
        'post_type'      => array( 'post' ),
        'post_status'    => array( 'publish' ),
        'posts_per_page' => 6,
        'paged'          => max(1, get_query_var('paged')), // Página actual
    );

    // The Query
    $post_query = new WP_Query( $args );

    ?>

        <div class="container blog">

            <div class="row">

                <header class="page-header">
                    <h1 class="page-title">
                        <?php single_post_title(); ?>
                    </h1>                            
                </header>


                <div class="col-lg-12 list__posts">

                    <?php if ( $post_query->have_posts() ) : ?>

                        

                        <?php
                        // Start the Loop.
                        while ( $post_query->have_posts() ) :
                            // You can list your posts here
                            $post_query->the_post();
                            ?>
                            <div class="archive-item blog-post col-lg-4 col-md-6">
                                

                                <div class="post-thumbnail main__post__img">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                </div>
                                <div class="post-title">
                                    <a href="<?php the_permalink(); ?>" class="blog__post__title">
                                        <?php the_title(); ?>
                                    </a>
                                </div>
                                <div class="post-content">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        <?php
                        endwhile; ?>

                       
                    <?php
                    else :
                    ?>
                        <p>No hay entradas disponibles.</p>
                    <?php endif; 

                    // Restore original Post Data
                    wp_reset_postdata();
                    ?>


                </div>

                 <!-- Paginación -->
                 <div class="pagination">
                            <?php
                            echo paginate_links(array(
                                'base'      => str_replace(99999, '%#%', esc_url(get_pagenum_link(99999))), // Formato de los enlaces
                                'format'    => '?paged=%#%',
                                'current'   => max(1, get_query_var('paged')), // Página actual
                                'total'     => $post_query->max_num_pages, // Total de páginas
                                'prev_text' => __('&laquo; Anterior', 'text-domain'),
                                'next_text' => __('Siguiente &raquo;', 'text-domain'),
                            ));
                            ?>
                        </div>


            </div>
        </div>

</main><!-- #main -->

<?php
get_footer();