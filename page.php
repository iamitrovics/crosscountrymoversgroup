<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

	<?php
	$imageID = get_field('background_image_reg_page');
	$image = wp_get_attachment_image_src( $imageID, 'full-image' );
	$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
	?> 


	<header id="inner-header" style="background-image:url(<?php echo $image[0]; ?>)">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php the_field('header_title_regular_page'); ?></h1>
                    <div class="custom-breadcrumb">
                        <ul>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                            <li><?php the_title(); ?></li>
                        </ul>
                    </div>
                    <!-- /.custom-breadcrumb -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </header>
    <!-- /#inner-header -->
    <section  class="home-section" id="about-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <?php if( have_rows('content_block_reg_page') ): ?>
                    <?php while( have_rows('content_block_reg_page') ): the_row(); ?>
                        <?php if( get_row_layout() == 'full_width_content' ): ?>

                                <?php the_sub_field('content_block'); ?>

                        <?php elseif( get_row_layout() == 'image' ): ?>


                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#about-area -->  

<?php
get_footer();
