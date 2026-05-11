<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class('lp__body-only'); ?>>

<header id="lp__header-clean">
    <div class="container text-center">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Logo" class="lp__logo-img">
        </a>
    </div>
</header>
