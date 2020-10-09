<?php
$third_args = array(
    'posts_per_page' => 4,
    'order'          => 'DESC',
    'orderby'        => 'date',
    'post_status'    => 'publish',
    'cat'       => get_theme_mod( 'ju_third_section_posts' ),
);
// the query
$third_section = new WP_Query( $third_args ); ?>
<?php if ( $third_section->have_posts() ) : ?>
    <div class="content_bottom_left">
        <div class="technology_catrarea">
            <div class="single_category">
                <h2>
                    <span class="bold_line"><span></span></span> <span class="solid_line"></span>
                    <a class="title_text" href="#"><?php echo get_theme_mod('ju_third_section_category_title'); ?>
                    </a>
                </h2>
                <!-- the loop -->
                <?php while ( $third_section->have_posts() ) { ?>
        <?php $third_section->the_post(); ?>
                    <?php if ( $third_section->current_post == 0 ) : ?>
                        <div class="business_category_left">
                            <ul class="fashion_catgnav wow fadeInDown">
                                <li>
                                    <div class="catgimg2_container"> <a href="#"><img alt="" src="<?php echo the_post_thumbnail_url($third_section->post->ID); ?>"></a> </div>
                                    <h2 class="catg_titile"><a href="#"><?php echo get_the_title($third_section->post->ID); ?></a></h2>
                                    <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla...</p>
                                </li>
                            </ul>
                        </div>
                    <?php else : ?>
                        <div class="business_category_right">
                            <ul class="small_catg wow fadeInDown">
                                <li>
                                    <div class="media wow fadeInDown"> <a class="media-left" href="<?php the_permalink($third_section->post->ID); ?>"><img src="<?php echo the_post_thumbnail_url($third_section->post->ID); ?>" alt=""></a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="<?php echo get_permalink($third_section->post->ID); ?>"><?php echo get_the_title($third_section->post->ID); ?> </a></h4>
                                            <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    <?php endif; ?>
                <?php } ?>
                <!-- end of the loop -->
            </div>
        </div>
    </div>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>