<?php
$firsst_right_args = array(
    'posts_per_page' => 4,
    'order'          => 'DESC',
    'orderby'        => 'date',
    'post_status' => 'publish',
    'cat'        => get_theme_mod( 'ju_first_section_right_posts' ),
);
// the query
$first_right = new WP_Query( $firsst_right_args ); ?>

<?php if ( $first_right->have_posts() ) : ?>
    <div class="content_top_right">
        <ul class="featured_nav wow fadeInDown">
            <!-- the loop -->
            <?php while ( $first_right->have_posts() ) : $first_right->the_post(); ?>
                <li><img src="<?php the_post_thumbnail_url(); ?>" width="540" height="425" alt="">
                    <div class="title_caption"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></div>
                </li>
            <?php endwhile; ?>
            <!-- end of the loop -->
        </div>
    </ul>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
