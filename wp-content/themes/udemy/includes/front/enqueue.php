<?php

function ju_enqueue(){
    $uri                =   get_theme_file_uri();
    $ver                =   JU_DEV_MODE ? time() : false;

    wp_register_style( 
        'ju_google_fonts', 
        'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i', 
        [],  
        $ver
    );
    wp_register_style( 'ju_custom', $uri . '/assets/css/custom.css', [], $ver );
    wp_register_style( 'ju_bootstrap', $uri . '/assets/css/bootstrap.min.css', [], $ver );
    wp_register_style( 'ju_style', $uri . '/assets/css/style.css', [], $ver );
    wp_register_style( 'ju_font_icons', $uri . '/assets/css/font-awesome.min.css', [], $ver );
    wp_register_style( 'ju_owl', $uri . '/assets/css/owl.carousel.css', [], $ver );
    wp_register_style( 'ju_slick', $uri . '/assets/css/slick.css', [], $ver );
    wp_register_style( 'ju_animate', $uri . '/assets/css/animate.css', [], $ver );
    wp_register_style( 'ju_theme', $uri . '/assets/css/theme.css', [], $ver );

    wp_enqueue_style( 'ju_google_fonts' );
    wp_enqueue_style( 'ju_custom' );
    wp_enqueue_style( 'ju_bootstrap' );
    wp_enqueue_style( 'ju_style' );
    wp_enqueue_style( 'ju_font_icons' );
    wp_enqueue_style( 'ju_animate' );
    wp_enqueue_style( 'ju_owl' );
    wp_enqueue_style( 'ju_slick' );
    wp_enqueue_style( 'ju_theme' );

    $read_more_color                =   get_theme_mod( 'ju_read_more_color' );
    wp_add_inline_style(
        'ju_theme',
        'a.more-link{ color: ' . $read_more_color . '; border-color: '. $read_more_color. '; }'
    );

    wp_register_script( 'ju_jquery', $uri . '/assets/js/jquery.min.js', [], $ver, true );
    wp_register_script( 'ju_bootstrap', $uri . '/assets/js/bootstrap.min.js', [], $ver, true );
    wp_register_script( 'ju_wow', $uri . '/assets/js/wow.min.js', [], $ver, true );   
    wp_register_script( 'ju_slick', $uri . '/assets/js/slick.min.js', [], $ver, true );
    wp_register_script( 'ju_custom', $uri . '/assets/js/custom.js', [], $ver, true );

    wp_enqueue_script( 'ju_jquery' );
    wp_enqueue_script( 'ju_bootstrap' );
    wp_enqueue_script( 'ju_wow' );
    wp_enqueue_script( 'ju_slick' );
    wp_enqueue_script( 'ju_custom' );

}