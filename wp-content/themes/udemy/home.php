<?php get_header(); ?>

<!-- Content
============================================= -->
<section id="mainContent">
<div class="container">
<?php
if( !is_single() && is_home() && get_theme_mod( 'ju_show_first_section_posts' ) ){
    ?>
    <div class="content_top">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm6">
    <!--                         Start hire -->
    <div class="latest_slider">
    <div class="slick_slider">
    <?php get_template_part('template-parts/first', 'slider') ?>
    </div>
    </div>
    <!--                         End hire -->
    </div>
    <div class="col-lg-6 col-md-6 col-sm6">
    <?php get_template_part('template-parts/first', 'right') ?>
    </div>
    </div>
    </div>
    <?php
}
?>
<div class="content_bottom">
<div class="col-lg-8 col-md-8">
<?php if ( !is_single() && is_home() && get_theme_mod( 'ju_show_second_section_posts' ) ){
    ?>
    <?php get_template_part('template-parts/second', 'section') ?>
    <?php
}?>
    <?php if ( !is_single() && is_home() && get_theme_mod( 'ju_show_third_section_posts' ) ){
        ?>
        <?php get_template_part('template-parts/third', 'section') ?>
        <?php
    }?>
    <?php if ( !is_single() && is_home() && get_theme_mod( 'ju_show_fourth_section_posts' ) ){
        ?>
        <?php get_template_part('template-parts/fourth', 'section') ?>
        <?php
    }?>
</div>
<div class="col-lg-4 col-md-4">
    <?php get_sidebar(); ?>
</div>
</div>
</div>
</section><!-- #content end -->

<?php get_footer(); ?>