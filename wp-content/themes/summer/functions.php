<?php
add_theme_support( 'post-thumbnails' );
add_post_type_support( 'page', 'excerpt' );
//Підключаємо меню на сайт
register_nav_menus( array(
    'primary' => __( 'Primary Navigation', 'summer' ),
) );