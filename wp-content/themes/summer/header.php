<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php
        wp_title( '|', true, 'right' );

        // Add the blog name.
        bloginfo( '' );

        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";

        ?>
    </title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="header-holder">
        <div class="header">
            <h1><a href="<?php bloginfo('siteurl'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Logo" /></a></h1>
        </div>
    </div>
