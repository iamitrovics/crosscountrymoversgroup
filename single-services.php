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

	<?php
	$imageID = get_field('header_background_services');
	$image = wp_get_attachment_image_src( $imageID, 'full-image' );
	$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
	?> 


	<header id="inner-header" style="background-image:url(<?php echo $image[0]; ?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php the_field('header_title_serv'); ?></h1>
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

<section class="home-section" id="services-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <?php if( have_rows('content_layout_services') ): ?>
                    <?php while( have_rows('content_layout_services') ): the_row(); ?>
                        <?php if( get_row_layout() == 'full_width_content' ): ?>

                            <?php the_sub_field('content_block'); ?>

                        <?php elseif( get_row_layout() == 'full_width_image' ): ?>

                            <div class="featured-photo">
                                <?php
                                $imageID = get_sub_field('featured_image');
                                $image = wp_get_attachment_image_src( $imageID, 'half-image' );
                                $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                ?> 

                                <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                <div class="caption"><?php the_sub_field('image_caption'); ?></div>
                            </div>     

                        <?php elseif( get_row_layout() == 'image_left_text_right' ): ?>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="featured-photo">
                                        <?php
                                        $imageID = get_sub_field('featured_image');
                                        $image = wp_get_attachment_image_src( $imageID, 'half-image' );
                                        $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                        ?> 

                                        <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                        <div class="caption"><?php the_sub_field('image_caption'); ?></div>
                                    </div>   
                                </div>
                                <div class="col-md-6">
                                    <?php the_sub_field('content_block'); ?>
                                </div>
                            </div>

                        <?php elseif( get_row_layout() == 'image_right_text_left' ): ?>

                            <div class="row">
                                <div class="col-md-6">
                                    <?php the_sub_field('content_block'); ?>
                                </div>
                                <div class="col-md-6">
                                    <div class="featured-photo">
                                        <?php
                                        $imageID = get_sub_field('featured_image');
                                        $image = wp_get_attachment_image_src( $imageID, 'half-image' );
                                        $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                        ?> 

                                        <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                        <div class="caption"><?php the_sub_field('image_caption'); ?></div>
                                    </div>   
                                </div>
                            </div> 

                        <?php elseif( get_row_layout() == 'accordion' ): ?>				

                            <div class="accordion-section">
                                <?php if( get_sub_field('accordion_title') ): ?>
                                    <h2><?php the_sub_field('accordion_title'); ?></h2>
                                <?php endif; ?>
                                <div class="accordion-list">
                                <?php if( have_rows('accordion_list') ): ?>
                                    <?php while( have_rows('accordion_list') ): the_row(); ?>

                                        <div class="panel">
                                            <h4><?php the_sub_field('heading'); ?></h4>
                                            <div class="panel__content">
                                                <?php the_sub_field('content'); ?>
                                            </div>
                                        </div>
                                        <!-- /.panel -->
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                </div>
                                <!-- // acc  -->
                            </div>
                            <!-- // section  -->
                            

                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>

                <div id="bottom-form" class="services-form">
                            
                    <?php include(TEMPLATEPATH . '/inc/inc_quote_form.php'); ?>

                </div>
                <!-- /.blog-share -->

            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.home-section -->   

<?php
get_footer();
