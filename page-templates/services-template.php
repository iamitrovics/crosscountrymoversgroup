<?php
/**
 * Template Name: Services Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<header id="inner-header" style="background-image:url(<?php bloginfo('template_directory'); ?>/img/bg/inner-header.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php the_title(); ?></h1>
                <div class="custom-breadcrumb">
                    <ul>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                        <li>Services</li>
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
		
<?php get_footer(); ?>

