<?php

function ju_enqueue() {
    $uri = get_theme_file_uri();

    wp_register_style('ju_google_fonts', 'url');
    wp_register_style('ju_custom', $uri.'/assets/css/custom.css');       
    wp_register_style('ju_bootstrap', $uri.'/assets/css/bootstrap.min.css');       
    wp_register_style('ju_animate', $uri.'/assets/css/animate.css');
    wp_register_style('ju_fontawesome', $uri.'/assets/css/font-awesome.min.css');       
    wp_register_style('ju_owl', $uri.'/assets/css/owl.carousel.css');
    wp_register_style('ju_style', $uri.'/assets/css/style.css');              
    wp_register_style('ju_theme', $uri.'/assets/css/theme.css');       

    wp_enqueue_style('ju_google_fonts');
    wp_enqueue_style('ju_custom');
    wp_enqueue_style('ju_bootstrap');
    wp_enqueue_style('ju_animate');
    wp_enqueue_style('ju_fontawesome');
    wp_enqueue_style('ju_owl');
    wp_enqueue_style('ju_style');
    wp_enqueue_style('ju_theme');

    wp_register_script('ju_jquery', $uri.'/assets/js/jquery.min.js', [], false, true);
    wp_register_script('ju_bootstrap', $uri.'/assets/js/bootstrap.min.js', [], false, true);
    wp_register_script('ju_custom', $uri.'/assets/js/custom.js', [], false, true);
    wp_register_script('ju_html5shiv', $uri.'/assets/js/html5shiv.min.js', [], false, true);
    wp_register_script('ju_respond', $uri.'/assets/js/respond.min.js', [], false, true);
    wp_register_script('ju_slick', $uri.'/assets/js/slick.min.js', [], false, true);
    wp_register_script('ju_wow', $uri.'/assets/js/wow.min.js', [], false, true);

    wp_enqueue_script('ju_jquery');
    wp_enqueue_script('ju_bootstrap');
    wp_enqueue_script('ju_html5shiv');
    wp_enqueue_script('ju_respond');
    wp_enqueue_script('ju_slick');
    wp_enqueue_script('ju_wow');
    wp_enqueue_script('ju_custom');

}