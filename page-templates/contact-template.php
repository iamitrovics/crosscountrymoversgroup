<?php
/**
 * Template Name: Contact Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

	<?php
	$imageID = get_field('background_image_contact_header');
	$image = wp_get_attachment_image_src( $imageID, 'full-image' );
	$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
	?> 


	<header id="inner-header" style="background-image:url(<?php echo $image[0]; ?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php the_field('header_title_contact_header'); ?></h1>
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
                <div id="contact-page">
                    <h2><?php the_field('form_title_contact_content'); ?></h2>
					<?php the_field('form_code_contact_page'); ?>
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
<div id="contact-ctas">
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <div class="contact-item">
                        <h3><?php the_field('block_title_1_contact'); ?></h3>
                        <p><?php the_field('company_address_contact'); ?></p>
                        <p><strong><?php the_field('company_info_dots'); ?></strong></p>
                    </div>
                    <!-- /.contact-item -->
                </div>
                <!-- /.col-lg-4 -->

                <div class="col-lg-4">
                    <div class="contact-item">
                        <h3><?php the_field('block_title_3_contact'); ?></h3>
                        <p><?php the_field('phone_label_contact'); ?> <a href="tel:<?php the_field('phone_number_contact'); ?>"><?php the_field('phone_number_contact'); ?></a></p>
                    </div>
                    <!-- /.contact-item -->
                </div>
                <!-- /.col-lg-4 -->

                <div class="col-lg-4">
                    <div class="contact-item">
                        <h3><?php the_field('block_title_email_contact'); ?></h3>
                        <p><a href="mailto:<?php the_field('email_address_contact'); ?>"><?php the_field('email_address_contact'); ?></a></p>
                    </div>
                    <!-- /.contact-item -->
                </div>
                <!-- /.col-lg-4 -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#contact-ctas -->
	
<?php get_footer(); ?>

