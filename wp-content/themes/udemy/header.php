<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="content-type" content="text/html; charset=<?php bloginfo('charset'); ?>" />

    <!-- Stylesheets
	============================================= -->
    <?php wp_head(); ?>

    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body <?php body_class('stretched no-transition'); ?>>
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

    <!-- Header
    ============================================= -->
    <div class="container">
        <header id="header">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="header_top">
                        <div class="header_top_left">
                            <?php
                            if (has_nav_menu('secondary')) {
                                wp_nav_menu([
                                    'theme_location'        =>  'secondary',
                                    'container'             =>  false,
                                    'fallback_cb'           =>  false,
                                    'depth'                 =>  1,
                                    'menu_class'           => 'top_nav',
                                    // 'walker'                =>  new JU_Custom_Nav_Walker()
                                ]);
                            }

                            ?>
                        </div>
                        <div class="header_top_right">
                            <form action="#" class="search_form">
                                <input type="text" placeholder="Text to Search">
                                <input type="submit" value="">
                            </form>
                        </div>
                    </div>
                    <div class="header_bottom">
                        <div class="header_bottom_left">
                            <!-- Logo
                ============================================= -->
                            <div id="logo">
                                <?php

                                if (has_custom_logo()) {
                                    the_custom_logo();
                                } else {
                                ?>
                                    <a href="<?php echo home_url('/'); ?>" class="standard-logo"><?php bloginfo('name'); ?></a>
                                <?php
                                }

                                ?>
                            </div><!-- #logo end -->
                            <div class="header_bottom_right">
                                <a href="#">
                                    <?php
                                    if (function_exists('quads_ad')) {
                                        echo quads_ad(['location' => 'udemy_header']);
                                    }
                                    ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </header>
    </div>
    <div class="container">
        <div id="navarea">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <?php

                        if (has_nav_menu('primary')) {
                            wp_nav_menu([
                                'theme_location'        =>  'primary',
                                'menu_id'               =>  'ju_primary',
                                'container'             =>  'div',
                                'fallback_cb'           =>  false,
                                'depth'                 =>  4,
                                'menu_class'           => 'nav navbar-nav custom_nav',
                                // 'walker'                =>  new JU_Custom_Nav_Walker()
                            ]);
                        }
                        ?>
                    </div>
                    <?php

                    if (get_theme_mod('ju_header_show_search')) {
                    ?>
                        <!-- Top Search
                            ============================================= -->
                        <div id="top-search">
                            <a href="#" id="top-search-trigger">
                                <i class="icon-search3"></i><i class="icon-line-cross"></i>
                            </a>
                            <form action="<?php echo esc_url(home_url('/')); ?>" method="get">
                                <input type="text" name="s" class="form-control" placeholder="<?php _e('Type &amp; Hit Enter..', 'udemy'); ?>" value="<?php the_search_query(); ?>">
                            </form>
                        </div><!-- #top-search end -->
                    <?php
                    }

                    ?>
                </div>
            </nav>
        </div>
    </div>