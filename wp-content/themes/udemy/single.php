<?php get_header(); ?>

<!-- Content
============================================= -->
<section id="mainContent">
    <div class="container">
        <div class="content_bottom">
            <div class="col-lg-8 col-md-8">
                <!-- Post Content
                ============================================= -->
                <div class="content_bottom_left p-2">

                    <?php

                    if( have_posts() ){
                        while( have_posts() ){
                            the_post();

                            global $post;
                            $author_ID          =   $post->post_author;
                            $author_URL         =   get_author_posts_url( $author_ID );

                            ?>
                            <div id="post-<?php the_ID(); ?>" class="single_page_area">
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Technology</a></li>
                                    <li class="active">Duis quis erat non nunc fringilla </li>
                                </ol>
                                <!-- Entry Title
                               ============================================= -->
                                <h2 class="post_titile"><?php the_title(); ?></h2>
                                <!-- .entry-title end -->
                                <div class="single_page_content">
                                <!-- Single Post
                                ============================================= -->
                                    <!-- Entry Meta
                                    ============================================= -->
                                        <div class="post_commentbox">
                                            <span><i class="fa fa-calendar"></i><?php echo get_the_date(); ?></span>
                                            <a href="#"><i class="fa fa-tags"></i><?php the_category( ' ' ); ?></a>
                                        </div>
                                    <!-- .entry-meta end -->
                                    <!-- Entry Image
                                    ============================================= -->
                                        <?php

                                        if( has_post_thumbnail() ){
                                            ?>
                                                <a href="<?php the_permalink(); ?>">
                                                    <img src="<?php the_post_thumbnail_url(); ?>" class="img-center" width="100%">
                                                </a>
                                            <?php
                                        }

                                        ?>
                                    <!-- .entry-image end -->

                                    <!-- Entry Content
                                    ============================================= -->

                                        <?php

                                        the_content();

                                        $defaults = array(
                                            'before'           => '<p>' . __( 'Pages:', 'udemy' ),
                                            'after'            => '</p>',
                                        );

                                        wp_link_pages( $defaults );

                                        ?>
                                        <!-- Post Single - Content End -->

                                        <!-- Tag Cloud
                                        ============================================= -->
                                        <div class="tagcloud clearfix bottommargin">
                                            <?php the_tags( '', ' ' ); ?>
                                        </div><!-- .tagcloud end -->

                                        <div class="clear"></div>
                                </div>
                                <!-- .entry end -->
                            </div>

                             <?php
                       }
                    }
                ?>
                    <div class="share_post">
                        <a class="facebook" href="#"><i class="fa fa-facebook"></i>Facebook</a>
                        <a class="twitter" href="#"><i class="fa fa-twitter"></i>Twitter</a>
                        <a class="googleplus" href="#"><i class="fa fa-google-plus"></i>Google+</a>
                        <a class="linkedin" href="#"><i class="fa fa-linkedin"></i>LinkedIn</a>
                        <a class="stumbleupon" href="#"><i class="fa fa-stumbleupon"></i>StumbleUpon</a>
                        <a class="pinterest" href="#"><i class="fa fa-pinterest"></i>Pinterest</a>
                    </div>

                </div>
                 <!-- Post Navigation
                 ============================================= -->
                <?php if(is_single()) : ?>
                 <div class="post_pagination">
                     <!-- Previous and Next Post -->
                     <div class="prev"> <a class="angle_left" href="#"><i class="fa fa-angle-double-left"></i></a>
                         <div class="pagincontent"> <span>Previous Post</span> <?php previous_post_link( '%link', '%title'); ?></div>
                     </div>
                     <div class="next">
                         <div class="pagincontent"> <span>Next Post</span><?php next_post_link( '%link', '%title' ); ?></div>
                         <a class="angle_right" href="#"><i class="fa fa-angle-double-right"></i></a>
                     </div>
                     <?php endif; ?>
                 </div>
                 <!-- .post-navigation end -->
                  <div class="similar_post">
                      <h2>Similar Post You May Like <i class="fa fa-thumbs-o-up"></i></h2>
                      <ul class="small_catg similar_nav wow fadeInDown animated">
                                    <?php

                                    $categories             =   get_the_category();

                                    $rp_query               =   new WP_Query([
                                        'posts_per_page'    =>  2,
                                        'post__not_in'      =>  [ $post->ID ],
                                        'cat'               =>  !empty($categories) ?  $categories[0]->term_id : null
                                    ]);

                                    if( $rp_query->have_posts() ){
                                        while( $rp_query->have_posts() ){
                                            $rp_query->the_post();

                                            ?>
                                           <li>
                                                <?php

                                                if( has_post_thumbnail() ){
                                                    ?>
                                                        <a class="media-left related-img" href="<?php the_permalink(); ?>">
                                                            <?php the_post_thumbnail( 'thumbnail' ); ?>
                                                        </a>
                                                    <?php
                                                }

                                                ?>

                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                                </div>
                                            </li>
                                            <?php
                                        }

                                        wp_reset_postdata();
                                    }

                                    ?>
                                </ul>
                  </div>
                <!-- .postcontent end -->
            </div>
            <div class="col-lg-4 col-md-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>
<!-- #content end -->

<?php get_footer(); ?>