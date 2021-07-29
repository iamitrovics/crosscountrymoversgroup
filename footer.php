<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

	<footer id="page-footer">
		<div id="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="footer-sitemap">
							<span class="footer-title"><?php the_field('block_title_footer', 'options'); ?></span>
							<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
						</div>
						<!-- /.footer-sitemap -->
					</div>
					<!-- /.col-md-4 -->
					<div class="col-md-4">
						<span class="footer-title"><?php the_field('block_title_footer_2', 'options'); ?></span>
						<div class="footer-contact" style="background-image:url(<?php the_field('map_world', 'options'); ?>">

							<div class="fc-item">
								<?php the_field('icon_code_address_footer', 'options'); ?>
								<p><strong><?php the_field('address_label_footer_contact', 'options'); ?></strong> <?php the_field('company_address_footer', 'options'); ?></p>
							</div>
							<!-- /.fc-item -->

							<div class="fc-item">
								<?php the_field('icon_code_email_footer', 'options'); ?>
								<p><strong><?php the_field('email_label_footer', 'options'); ?></strong> <a href="mailto:<?php the_field('email_address_footer', 'options'); ?>"><?php the_field('email_address_footer', 'options'); ?></a></p>
							</div>
							<!-- /.fc-item -->

							<div class="fc-item">
								<?php the_field('icon_code_phone_footer', 'options'); ?>
								<p><strong><?php the_field('phone_label_footer', 'options'); ?></strong> <?php the_field('phone_number_footer', 'options'); ?></p>
							</div>
							<!-- /.fc-item -->

						</div>
						<!-- /.footer-contact -->
					</div>
					<!-- /.col-md-4 -->
					<div class="col-md-4">
						<div class="footer-blogs">
							<span class="footer-title"><?php the_field('block_title_footer_3', 'options'); ?></span>

								<?php
								$loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3) ); ?>  
								<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

									<div class="blog-item">
										<div class="blog-photo">
											<a href="<?php echo get_permalink(); ?>">
												<?php
												$imageID = get_field('featured_image_blog');
												$image = wp_get_attachment_image_src( $imageID, 'large' );
												$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
												?> 

												<img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 												
											</a>
										</div>
										<!-- /.blog-photo -->
										<div class="blog-content">
											<span class="blog-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></span>
											<div class="comments">
												<span class="icon-bubbles"></span> <?php echo get_the_date( 'F j, Y' ); ?>
											</div>
											<!-- /.comments -->
										</div>
										<!-- /.blog-content -->
									</div>
									<!-- /.blog-item -->

								<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>      							

						</div>
						<!-- /.footer-blogs -->
					</div>
					<!-- /.col-md-4 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</div>
		<!-- /#footer-top -->
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<small><?php the_field('copyright_text_footer', 'options'); ?><?php echo(date('Y'));?>. All Rights Reserved</small>
					</div>
					<!-- /.col-md-8 -->
					<div class="col-md-4">
						<div class="footer-socials">
							<ul>
								<?php if( have_rows('socials_list_gen', 'options') ): ?>
									<?php while( have_rows('socials_list_gen', 'options') ): the_row(); ?>

										<li><a href="<?php the_sub_field('link_to_socials'); ?>" target="_blank"><?php the_sub_field('icon_code'); ?></a></li>

									<?php endwhile; ?>
								<?php endif; ?>								
							</ul>
						</div>
						<!-- /.footer-socials -->
					</div>
					<!-- /.col-md-4 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</div>
		<!-- /.copyright -->
	</footer>
	<!-- /#page-footer -->

	<div id="cookie-notice">
		<div id="cookie-notice-in">
			<div class="notice-text">
				<?php the_field('notice_text_cookies', 'options'); ?>
			</div>
			<!-- /.notice-text -->
			<div class="notice-btns">
				<a href="#" id="accept-cookie"><?php the_field('button_1_label_cookies', 'options'); ?></a>
				<a href="<?php the_field('button_link_cooke_2', 'options'); ?>"><?php the_field('button_2_label_cooki', 'options'); ?></a>
			</div>
			<!-- /.notice-btns -->
			<a href="javascript:void(0);" id="close-notice"></a>
		</div>
		<!-- /#cookie-notice-in -->
	</div>
	<!-- /#cookie-notice -->

	<a id="go-to-top" href="javascript:;"><i class="fas fa-chevron-up"></i></a>
	<div class="modal-overlay disclaimer-modal" data-my-element="tooltip-modal">
		<div class="modal" data-my-element="tooltip-modal">
			<a class="close-modal">
				<img src="<?php bloginfo('template_directory'); ?>/img/ico/close.svg" alt="">
			</a>
			<!-- close modal -->
			<div class="disclaimer-modal-wrap">
				<?php the_field('tooltip_content_modal', 'options'); ?>
			</div>
			<!-- /.disclaimer-modal-wrap -->
		</div>
		<!-- modal -->
	</div>
	<!-- overlay -->

	<div class="search-div">
		<a href="#" class="close-search">×</a>

			<form role="search" method="get" id="searchform"
				class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<div>
					<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
					<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Enter search keyword here..." />
					<button type="submit"><span class="icon-search"></span></button>

				</div>
			</form>    

	</div>
	<div class="search-overlay"></div>
	<!-- /.search-div -->

	<?php wp_footer(); ?>

	<?php if( get_field('footer_code_snippet', 'options') ): ?>
		<?php the_field('footer_code_snippet', 'options'); ?>
	<?php endif; ?>

	<script src="<?php bloginfo('template_directory'); ?>/js/sliding-menu.js"></script>


</body>
</html>

