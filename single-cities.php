<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<header style="background-image:url(<?php the_field('background_image_header_cities') ?>)" class="city-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="header-caption">
                    <h1><?php the_field('title_header_cities') ?></h1>
                    <div class="heading-text">
                        <p><?php the_field('subtitle_header_cities') ?></p>
                        <p><a href="tel:<?php the_field('phone_number_header_cities') ?>"><?php the_field('phone_number_header_cities') ?></a></p>
                    </div>
                    <!-- /.heading-text -->
                </div>
                <!-- /.header-caption -->
            </div>
            <!-- /.col-lg-6 -->
            <div class=" col-lg-6">
                <?php include(TEMPLATEPATH . '/inc/inc_quote_form.php'); ?>
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</header>

<?php if( have_rows('content_layout_city') ): ?>
    <?php while( have_rows('content_layout_city') ): the_row(); ?>

        <?php if( get_row_layout() == 'logos' ): ?>

            <div id="trusted-logos">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="trusted-logos">

                                <ul>

                                <?php

                                    // check if the repeater field has rows of data
                                    if(have_rows('logos_repeater_cities')):

                                        // loop through the rows of data
                                        while(have_rows('logos_repeater_cities')) : the_row();

                                            ?>  

                                            <li><a href="<?php the_sub_field('link') ?>" target="_blank"><img src="<?php the_sub_field('logo') ?>" alt="yelp" width="162" height="86" /></a></li>

                                        <?php endwhile;

                                    else :
                                        echo 'No data';
                                    endif;
                                    ?>

                                </ul>
                                
                            </div>
                            <!-- /.trusted-logos -->
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /#trusted-logos -->

            <?php elseif( get_row_layout() == 'intro' ): ?>

            <div id="city-intro" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/bg/bg-ccmg-1.jpg); ?>)">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 cic-out">
                            <div class="city-intro-content">
                                <div class="city-intro-ico">
                                    <span class="icon-truck"></span>
                                </div>
                                <?php the_sub_field('intro_text'); ?>
                            </div>
                            <!-- /.city-intro-content -->
                        </div>
                        <!-- /.col-lg-8 -->
                        <div class="col-lg-4">
                            <div class="city-intro-photo">
                                <img src="<?php the_sub_field('intro_image'); ?>" alt="">
                            </div>
                            <!-- /.city-intro-photo -->
                        </div>
                        <!-- /.col-lg-4 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /#city-intro -->

            <?php elseif( get_row_layout() == 'full_width_content' ): ?>

                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="city-text">
                                <?php the_sub_field('content_block'); ?>
                            </div>
                            <!-- /.city-text -->
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->

            <?php elseif( get_row_layout() == 'full_width_content_dark' ): ?>

            <section class="full-width-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="city-text dark">
                                <?php the_sub_field('content_block'); ?>
                            </div>
                            <!-- /.city-text -->
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>

            <?php elseif( get_row_layout() == 'services' ): ?>

            <div id="city-services" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/bg/bg-yellow-ccmg.jpg); ?>)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="city-services-intro">
                                <?php the_sub_field('services_intro_text'); ?>
                            </div>
                            <!-- /.city-services-intro -->
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">

                        <?php
                        $loop = new WP_Query( array( 'post_type' => 'services', 'posts_per_page' => 15) ); ?>  
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                            <div class="col-md-6">
                                <div class="service-item">
                                    <div class="service-ico">
                                        <a href="<?php echo get_permalink(); ?>"><?php the_field('icon_code_single_city'); ?></a>
                                    </div>
                                    <!-- /.service-ico -->
                                    <h3><?php the_title(); ?></h3>
                                    <?php the_field('short_description_serv'); ?>
                                    <a href="<?php echo get_permalink(); ?>" class="service-link">Learn More</a>
                                </div>
                                <!-- /.service-item -->
                            </div>
                            <!-- /.col-md-6 -->

                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>                          

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /#city-services -->

            <?php elseif( get_row_layout() == 'logos_reviews' ): ?>

            <div id="city-reviews">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="member-area">
                                <h2><?php the_sub_field('title'); ?></h2>
                                <div class="trusted-logos">
                                    <ul>

                                    <?php

                                        // check if the repeater field has rows of data
                                        if(have_rows('logos_repeater_cities')):

                                            // loop through the rows of data
                                            while(have_rows('logos_repeater_cities')) : the_row();

                                                ?>  

                                                <li><a href="<?php the_sub_field('link') ?>" target="_blank"><img src="<?php the_sub_field('logo') ?>" alt="yelp" width="162" height="86" /></a></li>

                                            <?php endwhile;

                                        else :
                                            echo 'No data';
                                        endif;
                                        ?>

                                    </ul>
                                </div>
                            </div>
                            <!-- /.header-caption -->
                        </div>
                        <!-- /.col-lg-4 -->
                        <div class="col-lg-8">
                            <div id="city-reviews-slider">

                            <?php
                                $post_objects = get_sub_field('reviews_list');

                                if( $post_objects ): ?>
                                    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                                        <?php setup_postdata($post); ?>
                                
                                            <div>
                                                <div class="review-area">

                                                    <div class="review-info">
                                                        <?php the_field('review_content_yelp') ?>
                                                        <div class="review-logo">
                                                            <a href="<?php the_field('reviews_logo_link'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logos/yelp_outline.png" alt="Yelp Logo"></a>
                                                        </div>
                                                        <!-- /.review-logo -->
                                                    </div>
                                                    <!-- /.review-info -->

                                                    <div class="author-info">
                                                        <img src="<?php the_field('author_image_yelp'); ?>" alt="">
                                                        <div class="author">
                                                            <span class="author-name"><?php the_title(); ?></span>
                                                            <span class="date"><?php the_field('review_date_yelp'); ?></span>
                                                            <!-- /.date -->
                                                        </div>
                                                        <!-- /.author -->
                                                    </div>
                                                    <!-- /.author-info -->
                                                </div>
                                                <!-- /.review-area -->
                                            </div>
                                
                                    <?php endforeach; ?>
                                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                            <?php endif; ?>
                            <?php wp_reset_postdata(); ?>

                                
                            </div>
                            <!-- /#city-reviews-slider -->
                            
                        </div>
                        <!-- /.col-lg-8 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /#city-reviews -->

            <?php elseif( get_row_layout() == 'testimonial_section' ): ?>

            <div id="testimonials" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/bg/banner-road.jpg); ?>)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2><?php the_sub_field('title'); ?></h2>

                            <?php
                                $post_objects = get_sub_field('testimonials_list');

                                if( $post_objects ): ?>
                                    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                                        <?php setup_postdata($post); ?>
                                
                                            <div class="star-area">
                                                <span class="mr-star-rating"> 
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                </span>
                                            </div>
                                            <span class="author"><?php the_title(); ?></span>
                                            <p><?php the_field('testimonial_text'); ?></p>
                                
                                    <?php endforeach; ?>
                                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                            <?php endif; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /#testimonials -->

            <?php elseif( get_row_layout() == 'desctription_section' ): ?>

            <div id="ready-to-move">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="rtm-photo">
                                <img src="<?php the_sub_field('image'); ?>" alt="">
                            </div>
                            <!-- /.rtm-photo -->
                        </div>
                        <!-- /.col-lg-4 -->
                        <div class="col-lg-8 rtm-out">
                            <div class="rtm-content">
                                <?php the_sub_field('description_text'); ?>
                                <a href="#city-contact" class="rtm-link">Get started today</a>
                            </div>
                            <!-- /.rtm-content -->
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /#ready-to-move -->

            <?php elseif( get_row_layout() == 'contact_section' ): ?>

            <div id="city-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="contact-info">
                                <p><?php the_sub_field('contact_details'); ?></p>
                                <div class="map">
                                    <?php the_sub_field('map_code'); ?>
                                </div>
                                <!-- /.map -->
                            </div>
                            <!-- /.contact-info -->
                        </div>
                        <!-- /.col-lg-5 -->
                        <div class="col-lg-6 offset-lg-1">
                            <?php include(TEMPLATEPATH . '/inc/inc_quote_form.php'); ?>
                        </div>
                        <!-- /.col-lg-5 offset-lg-1 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /#city-contact -->

        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>


<?php
get_footer();
