<?php
/**
 * Template Name: About Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

	<?php
	$imageID = get_field('background_image_about_header');
	$image = wp_get_attachment_image_src( $imageID, 'full-image' );
	$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
	?> 


	<header id="inner-header" style="background-image:url(<?php echo $image[0]; ?>)">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><?php the_field('custom_title_about_page'); ?></h1>
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

	<section class="home-section" id="about-page">
		<div class="container">
			<div class="row fact-items">

			<?php if( have_rows('features_list_about_page') ): ?>
				<?php while( have_rows('features_list_about_page') ): the_row(); ?>

					<div class="col-md-4">
						<div class="fact-item">
							<?php the_sub_field('icon'); ?>
							<span class="fact-num"><?php the_sub_field('value'); ?></span>
							<span class="fact-info"><?php the_sub_field('description'); ?></span>
						</div>
						<!-- /.fact-item -->
					</div>
					<!-- /.col-md-4 -->

				<?php endwhile; ?>
			<?php endif; ?>

			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-md-12">
					<?php the_field('content_block_about_page'); ?>
					<?php include(TEMPLATEPATH . '/inc/inc_quote_form.php'); ?>
				</div>
				<!-- /.col-md-12 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /.home-section -->	

<?php get_footer(); ?>

