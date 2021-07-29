<?php
/**
 * Template Name: Simple Cities Template
 * Template Post Type: cities
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<header id="inner-header" style="background-image:url(<?php the_field('background_image_cities_sec') ?>)" class="no-caption-header"></header>
<!-- /#inner-header -->

<section class="home-section" id="about-page">
    <div class="container">
        <div class="row" id="moving-page">
            <div class="col-lg-8">
            <?php if( have_rows('flexible_content_city_second') ): ?>
                <?php while( have_rows('flexible_content_city_second') ): the_row(); ?>

                    <?php if( get_row_layout() == 'full_width_content' ): ?>
                        <?php the_sub_field('content_block'); ?>

                    <?php elseif( get_row_layout() == 'full_width_image' ): ?>
                        <img src="<?php the_sub_field('content_image') ?>" alt="" />

                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>

            </div>
            <!-- /.col-lg-8 -->
            <div class="col-lg-4">
            <div class="quote-form">
                <div class="quote-form-in">

                    <span class="quote-title">Get a Quote</span>

                    <?php include(TEMPLATEPATH . '/inc/inc_quote_form.php'); ?>

                </div>
                <!-- /.quote-form-in -->
            </div>
            <!-- /.quote-form -->
            </div>
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.home-section -->

<?php
get_footer();
