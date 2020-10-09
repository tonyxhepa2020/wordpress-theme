<?php
$args = array(
    'posts_per_page' => 5,
    'order'          => 'DESC',
    'orderby'        => 'date',
    'post_status' => 'publish',
    'cat' => get_theme_mod( 'ju_first_section_slider_posts' ),
);
// the query
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
<div class="latest_slider">
    <div class="slick_slider">
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="single_iteam"><img width="540" height="425" src="<?php the_post_thumbnail_url(); ?>" alt="">
            <h2><a class="slider_tittle" href="pages/single.html"><?php the_title(); ?></a></h2>
        </div>
    <?php endwhile; ?>
    <!-- end of the loop -->
    </div>
</div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>