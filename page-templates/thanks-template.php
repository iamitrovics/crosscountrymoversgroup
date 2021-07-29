<?php
/**
 * Template Name: Thank You Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

	<?php
	$imageID = get_field('background_image_tnx');
	$image = wp_get_attachment_image_src( $imageID, 'full-image' );
	$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
	?> 


	<header id="inner-header" style="background-image:url(<?php echo $image[0]; ?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php the_field('header_title_tnx'); ?></h1>
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
                <div id="thankyou">
					<?php the_field('content_block_tnx'); ?>
                    <div class="yelp-icon">
                        <a href="<?php the_field('yelp_url'); ?>" title="" target=" _blank"><span class="icon-yelp"></span></a>
                    </div>
                    <!-- /.yelp-icon --> 
                </div>
                <!-- /#thankyou -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /#about-area -->

<?php get_footer(); ?>

