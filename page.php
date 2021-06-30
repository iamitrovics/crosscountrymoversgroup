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

    <header id="inner-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-caption">
                        <?php 
                        $values = get_field( 'custo_mtitle_regular_header' );
                        if ( $values ) { ?>
                            <h1><?php the_field('custo_mtitle_regular_header'); ?></h1>
                        <?php 
                        } else { ?>
                            <h1><?php the_title(); ?></h1>
                        <?php } ?>                        
                    </div>
                    <!-- /.header-caption -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </header>
    
    <section id="about-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                <?php if( have_rows('content_layout_regular') ): ?>
                    <?php while( have_rows('content_layout_regular') ): the_row(); ?>
                        <?php if( get_row_layout() == 'full_width_content' ): ?>

                            <div class="content">
                                <?php the_sub_field('content_block'); ?>
                            </div>

                        <?php elseif( get_row_layout() == 'full_width_image' ): ?>

                            <div class="image-holder">
                                <?php
                                $imageID = get_sub_field('featured_image');
                                $image = wp_get_attachment_image_src( $imageID, 'side-image' );
                                $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                ?> 

                                <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" />                                 
                            </div>

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
