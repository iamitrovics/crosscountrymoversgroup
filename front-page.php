<?php 
/**
 * Homepage / Front Page
**/
get_header(); ?>

    <header id="homepage-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php the_field('main_title_home_hero'); ?></h1>
                    <div class="heading-text">
                        <p><?php the_field('license_code_hero_home'); ?></p>
                        <div class="heading-separator">
                            <span class="main-bg"></span>
                            <span class="dark-bg"></span>
                        </div>
                    </div>
                    <!-- /.licenced-text -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </header>
    <!-- /#homepage-header -->
    <div class="homepage-quote">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <?php include(TEMPLATEPATH . '/inc/inc_quote_form.php'); ?>
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="homepage-photo">
                        <img src="<?php the_field('featured_image_hero_home'); ?>" alt="">
                    </div>
                    <!-- /.homepage-photo -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.homepage-quote -->


    <section class="home-section">
        <div class="home-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php the_field('section_title_about_home'); ?></h2>
                        <h3><?php the_field('section_subtitle_about_home'); ?></h3>
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.home-heading -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php the_field('content_block_about_home'); ?>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.home-section -->

    <section id="facts" class="home-section" style="background-image:url(<?php the_field('section_background_facts_home'); ?>)">
        <div class="home-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php the_field('section_title_facts_home'); ?></h2>
                        <h3><?php the_field('section_subtitle_facts_home'); ?></h3>
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.home-heading -->
        <div class="container">
            <div class="row fact-items">

                <?php if( have_rows('facts_list_home') ): ?>
                    <?php while( have_rows('facts_list_home') ): the_row(); ?>

                        <div class="col-md-4">
                            <div class="fact-item">
                                <?php the_sub_field('icon_code'); ?>
                                <span class="fact-num"><?php the_sub_field('number'); ?></span>
                                <span class="fact-info"><?php the_sub_field('value'); ?></span>
                            </div>
                            <!-- /.fact-item -->
                        </div>
                        <!-- /.col-md-4 -->

                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#facts.home-section -->

    <section id="autotransport">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="at-intro">
                        <div class="at-intro-in">
                            <h2><?php the_field('section_title_auto_home'); ?></h2>
                            <h3><?php the_field('section_subtitle_auto_home'); ?></h3>
                            <div class="heading-separator">
                                <span class="main-bg"></span>
                                <span class="dark-bg"></span>
                            </div>
                        </div>
                        <!-- /.at-intro-in -->
                    </div>
                    <!-- /.at-intro -->
                    
                    <div class="quote-form">
                        <div class="quote-form-in">
                            <span class="quote-title">Get Auto Quote</span>
                            <!-- /.quote-title -->
                            <?php echo do_shortcode('[contact-form-7 id="1487" title="Moving Car"]'); ?>

                        </div>
                        <!-- /.quote-form-in -->
                    </div>
                    <!-- /.quote-form -->

                    <div class="at-body">
                        <?php the_field('content_block_auto_home'); ?>
                        
                    </div>
                    <!-- /.at-body -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#autotransport -->

    <section id="testimonials" style="background-image:url(<?php the_field('background_image_test_home'); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonials-in">
                        <div class="testimonials-heading">
                            <div class="heading-in">
                                <h2><?php the_field('section_title_test_home'); ?></h2>
                                <h3><?php the_field('section_subtitle_test_home'); ?></h3>
                                <div class="heading-separator">
                                    <span class="main-bg"></span>
                                    <span class="dark-bg"></span>
                                </div>
                            </div>
                            <!-- /.heading-in -->
                        </div>
                        <!-- /.testimonials-heading -->
                        <div class="testimonials-list">

                            <?php
                                $post_objects = get_field('reviews_list_home');

                                if( $post_objects ): ?>
                                    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                                        <?php setup_postdata($post); ?>

                                        <div class="testimonial-item">
                                            <span class="author"><strong><?php the_title(); ?> :</strong> <?php the_field('review_source'); ?></span>
                                            <div class="text">
                                                <?php the_field('testimonial_text'); ?>
                                            </div>
                                            <!-- /.text -->
                                        </div>
                                        <!-- /.testimonial-item -->

                                    <?php endforeach; ?>
                                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                            <?php endif; ?>                        
                            
                        </div>
                        <!-- /.testimonials-list -->
                    </div>
                    <!-- /.testimonials-in -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#testimonials -->

    <section id="whatwedo">
        <div class="home-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php the_field('section_title_serv_home'); ?></h2>
                        <h3><?php the_field('section_subtitle_serv_home'); ?></h3>
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.home-heading -->
        <div class="container">
            <div class="row wwd-items">

                <?php if( have_rows('services_list_home') ): ?>
                    <?php while( have_rows('services_list_home') ): the_row(); ?>

                        <div class="col-lg-4">
                            <div class="wwd-item">
                                <div class="wwd-item-in">
                                    <?php the_sub_field('icon_code'); ?>
                                    <h4><?php the_sub_field('service_title'); ?></h4>
                                    <?php the_sub_field('content'); ?>
                                    <a href="<?php the_sub_field('button_link'); ?>" class="readmore"><?php the_sub_field('button_label'); ?></a>
                                </div>
                                <!-- /.wwd-item-in -->
                            </div>
                            <!-- /.wwd-item -->
                        </div>
                        <!-- /.col-lg-4 -->

                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#whatwedo -->

<?php get_footer(); ?>
