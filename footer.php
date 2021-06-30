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
							<span class="footer-title">Main Menu</span>
							<ul>
								<li><a href="#">About</a></li>
								<li><a href="#">Moving Services</a></li>
								<li><a href="#">Packing</a></li>
								<li><a href="#">Storage</a></li>
								<li><a href="#">Sitemap</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
						<!-- /.footer-sitemap -->
					</div>
					<!-- /.col-md-4 -->
					<div class="col-md-4">
						<span class="footer-title">Contact Us</span>
						<div class="footer-contact" style="background-image:url(img/bg/world.png">
							<div class="fc-item">
								<span class="cont-ico icon-location"></span>
								<p><strong>Headquarters:</strong> 11208 Patom Drive Culver City, CA 90230</p>
							</div>
							<!-- /.fc-item -->
							<div class="fc-item">
								<span class="cont-ico icon-envelop"></span>
								<p><strong>Email:</strong> <a href="mailto:info@crosscountrymoversgroup.com">info@crosscountrymoversgroup.com</a></p>
							</div>
							<!-- /.fc-item -->
							<div class="fc-item">
								<span class="cont-ico icon-phone"></span>
								<p><strong>Phone:</strong> (877) 332-3999</p>
							</div>
							<!-- /.fc-item -->
						</div>
						<!-- /.footer-contact -->
					</div>
					<!-- /.col-md-4 -->
					<div class="col-md-4">
						<div class="footer-blogs">
							<span class="footer-title">Read Our Blog</span>
							<div class="blog-item">
								<div class="blog-photo">
									<a href="#"><img src="img/misc/blog-photo.jpeg" alt=""></a>
								</div>
								<!-- /.blog-photo -->
								<div class="blog-content">
									<span class="blog-title"><a href="#">The Ultimate Moving to a Tiny House Checklist</a></span>
									<div class="comments">
										<span class="icon-bubbles"></span> Comments Off
									</div>
									<!-- /.comments -->
								</div>
								<!-- /.blog-content -->
							</div>
							<!-- /.blog-item -->
							<div class="blog-item">
								<div class="blog-photo">
									<a href="#"><img src="img/misc/blog-photo.jpeg" alt=""></a>
								</div>
								<!-- /.blog-photo -->
								<div class="blog-content">
									<span class="blog-title"><a href="#">Tips on How to Move Safely During the Covid-19 Pandemic and Beyond</a></span>
									<div class="comments">
										<span class="icon-bubbles"></span> Comments Off
									</div>
									<!-- /.comments -->
								</div>
								<!-- /.blog-content -->
							</div>
							<!-- /.blog-item -->
							<div class="blog-item">
								<div class="blog-photo">
									<a href="#"><img src="img/misc/blog-photo.jpeg" alt=""></a>
								</div>
								<!-- /.blog-photo -->
								<div class="blog-content">
									<span class="blog-title"><a href="#">How to Move Efficiently and Pack Like a Pro</a></span>
									<div class="comments">
										<span class="icon-bubbles"></span> Comments Off
									</div>
									<!-- /.comments -->
								</div>
								<!-- /.blog-content -->
							</div>
							<!-- /.blog-item -->
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
						<small>©Copyrights <strong>Cross Country Movers</strong> <?php echo(date('Y'));?>. All rights reserved</small>
					</div>
					<!-- /.col-md-8 -->
					<div class="col-md-4">
						<div class="footer-socials">
							<ul>
								<li><a href="https://www.yelp.com/biz/cross-country-movers-los-angeles" target="_blank"><span class="icon-yelp"></span></a></li>
								<li><a href="https://www.google.com/search?q=cross+country+movers+group+los+angeles&oq=cross+country+movers+group+los+angeles&aqs=chrome..69i57j69i60.8510j0j0&sourceid=chrome&ie=UTF-8" target="_blank"><span class="icon-google"></span></a></li>
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
				<p>This site uses cookies to provide you with a great user experience. By using our site, you accept our use of cookies.</p>
			</div>
			<!-- /.notice-text -->
			<div class="notice-btns">
				<a href="#" id="accept-cookie">Ok</a>
				<a href="#">Privacy Policy</a>
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
				<img src="img/ico/close.svg" alt="">
			</a>
			<!-- close modal -->
			<div class="disclaimer-modal-wrap">
				<p>By listing or updating my cellular phone information, I authorize Cross Country Movers Group to call or send SMS text messages using an automatic telephone dialing system or prerecorded message to my cell phone number to provide account information and services related to my long distance move. Additionally, I authorize Cross Country Movers Group to follow up in order to assist me with payment reminders and provide me with opportunities to provide feedback regarding customer service. If I do not want to receive calls or SMS text messages, I can unsubscribe by sending an email to info@crosscountrymoversgroup.com with the subject line “STOP Transaction Calls” or by calling a customer service representative at (877) 332-3999. Receipt of cellular phone calls and text messages may be subject to service provider charges.</p>
			</div>
			<!-- /.disclaimer-modal-wrap -->
		</div>
		<!-- modal -->
	</div>
	<!-- overlay -->
	<div class="search-div">
		<a href="#" class="close-search">×</a>
		<form action="">
			<input type="text" value="" name="s" placeholder="Enter search keyword here...">
			<button type="submit"></button>  
		</form>
	</div>
	<div class="search-overlay"></div>
	<!-- /.search-div -->

	<?php wp_footer(); ?>

	<?php if( get_field('footer_code_snippet', 'options') ): ?>
		<?php the_field('footer_code_snippet', 'options'); ?>
	<?php endif; ?>


</body>
</html>

