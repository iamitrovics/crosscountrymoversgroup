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
                    <?php include 'inc_quote_form.php';?>
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
                    <?php include 'inc_autoquote_form.php';?>
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
                            <div class="testimonial-item">
                                <span class="author"><strong>Michelle Greene:</strong> Via Google</span>
                                <div class="text">
                                    <p>This moving company is phenomenal! Their movers are accommodating, friendly, and extremely fast. The guys were extremely careful with all of my things, nothing broke en route, and all of the movers were generally very pleasant. For an extra charge they even moved my piano. I’m telling all of my friends to use these movers.</p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.testimonial-item -->
                            <div class="testimonial-item">
                                <span class="author"><strong>Courtney D.:</strong> Via Yelp</span>
                                <div class="text">
                                    <p>I’d highly recommend this moving company. Hayk and his team did a wonderful job. They were quick, efficient and reliable. They really hustled and worked hard. Moving is stressful so it was nice to have movers who were reliable. We’d use them again and refer them to friends.</p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.testimonial-item -->
                            <div class="testimonial-item">
                                <span class="author"><strong>Deirdre Maier:</strong> Via Google</span>
                                <div class="text">
                                    <p>I used his moving company to relocate my entire office to a different location. Those guys are great. They packed everything carefully, nothing got damage, they are very professional and friendly. I highly recommend them.</p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.testimonial-item -->
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
                        <h2>What We Do</h2>
                        <h3>Moving Services</h3>
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
                <div class="col-lg-4">
                    <div class="wwd-item">
                        <div class="wwd-item-in">
                            <span class="wwd-icon icon-truck"></span>
                            <h4>Moving</h4>
                            <p>Our professional long distance moving company offers affordable pricing and guaranteed satisfaction services. With our team of expert movers, you can rest assured be confident that the job will get done right.</p>
                            <ul>
                                <li>Packing and Unpacking</li>
                                <li>Installation & Assembly</li>
                                <li>Auto Transport</li>
                                <li>Storage</li>
                            </ul>
                            <a href="#" class="readmore">Read More</a>
                        </div>
                        <!-- /.wwd-item-in -->
                    </div>
                    <!-- /.wwd-item -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="wwd-item">
                        <div class="wwd-item-in">
                            <span class="wwd-icon icon-dropbox"></span>
                            <h4>Packing</h4>
                            <p>You can choose to oversee as we do the packing for you. We’ll carefully pack it all into moving boxes, regardless of the size. Our professional movers are more than qualified to properly handle your china and glassware. They are also capable of moving bulky and oversized items.</p>
                            <ul>
                                <li>Packing</li>
                                <li>Materials</li>
                                <li>Estimate</li>
                                <li>Affordable</li>
                            </ul>
                            <a href="#" class="readmore">Read More</a>
                        </div>
                        <!-- /.wwd-item-in -->
                    </div>
                    <!-- /.wwd-item -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="wwd-item">
                        <div class="wwd-item-in">
                            <span class="wwd-icon icon-home"></span>
                            <h4>Storage</h4>
                            <p>Sometimes when planning a move, whether it be residential or commercial, the move itself may require the need for additional storage space. In some cases, you may need storage while the previous or future property is in the process of being sold. Our team of specialists delivers storage services that offer you flexible solutions to fit your needs.</p>
                            <ul>
                                <li>Convenient</li>
                                <li>Stress Free</li>
                                <li>Secure</li>
                                <li>Experts</li>
                            </ul>
                            <a href="#" class="readmore">Read More</a>
                        </div>
                        <!-- /.wwd-item-in -->
                    </div>
                    <!-- /.wwd-item -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#whatwedo -->

<?php get_footer(); ?>
