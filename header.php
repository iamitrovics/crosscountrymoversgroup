<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="icon" type="image/png"  href="<?php echo get_template_directory_uri(); ?>/img/ico/favicon.png">
	<?php if( get_field('head_code_snippet', 'options') ): ?>
		<?php the_field('head_code_snippet', 'options'); ?>
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>

	<?php if( get_field('body_code_snippet', 'options') ): ?>
		<?php the_field('body_code_snippet', 'options'); ?>
	<?php endif; ?>

	<div id="menu_area" class="menu-area">

		<?php if ( get_field( 'notice_text_top', 'options' ) ): ?>

		<div id="cor-notice">
			<?php the_field('notice_text_top', 'options'); ?>
		</div>
					
		<?php else: ?>
		<?php endif; ?>

			<div id="menu-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<nav class="mainmenu">
								<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php the_field('website_logo_branding', 'options'); ?>" alt=""></a>
								<!-- /.navbar-brand -->
								<div class="collapse navbar-collapse">
									<ul class="navbar-nav ml-auto">
										<li><a href="#" class="active">Home</a></li>
										<li><a href="#">About</a></li>
										<li class="dropdown">
											<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
											<ul class="dropdown-menu fade">
												<li><a href="#">Auto Moving</a></li>
												<li><a href="#">Moving Services</a></li>
												<li><a href="#">Packing</a></li>
												<li><a href="#">Storage</a></li>
											</ul>
										</li>
										<li class="nav-item dropdown mega-dropdown">
											<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Cities </a>
											<ul class="dropdown-menu mega-dropdown-menu fade">
												<div class="row">
													<div class="col">
														<div class="dropdown__col">
															<span class="dropdown__title"><a href="#">Atlanta</a></span>
															<ul>
																<li><a href="#">Austin</a></li>
																<li><a href="#">Boston</a></li>
																<li><a href="#">Bronx</a></li>
																<li><a href="#">Chicago</a></li>
																<li><a href="#">Dallas</a></li>
																<li><a href="#">Denver</a></li>
																<li><a href="#">Anaheim</a></li>
																<li><a href="#">Los Angeles</a></li>
																<li><a href="#">Miami</a></li>
																<li><a href="#">New York</a></li>
															</ul>
														</div>
													</div>
													<div class="col">
														<div class="dropdown__col">
															<span class="dropdown__title"><a href="#">Philadelphia</a></span>
															<ul>
																<li><a href="#">Phoenix</a></li>
																<li><a href="#">Portland</a></li>
																<li><a href="#">Houston</a></li>
																<li><a href="#">Jersey City</a></li>
																<li><a href="#">San Diego</a></li>
																<li><a href="#">San Francisco</a></li>
																<li><a href="#">San Jose</a></li>
															</ul>
														</div>
													</div>
													<div class="col">
														<div class="dropdown__col">
															<span class="dropdown__title"><a href="#">Seattle</a></span>
															<ul>
																<li><a href="#">Temecula</a></li>
																<li><a href="#">Visalia</a></li>
																<li><a href="#">Washington</a></li>
															</ul>
														</div>
													</div>
												</div>
											</ul>
										</li>
										<li class="dropdown">
											<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cities</a>
											<ul class="dropdown-menu fade">
												<li><a href="#">Moving to and from Anaheim</a></li>
												<li><a href="#">Moving to or from Austin</a></li>
												<li><a href="#">Moving to or from Boston</a></li>
												<li><a href="#">Moving to or from the Bronx</a></li>
												<li><a href="#">Moving to or from Chicago</a></li>
												<li><a href="#">Moving to or from Dallas</a></li>
												<li><a href="#">Moving to or from Denver</a></li>
												<li><a href="#">Moving to or from Houston</a></li>
												<li><a href="#">Moving to and from Jersey City</a></li>
												<li><a href="#">Moving to and from Los Angeles</a></li>
												<li><a href="#">Moving to or from Miami</a></li>
												<li><a href="#">Moving to or from New York</a></li>
												<li><a href="#">Moving to or from Philadelphia</a></li>
												<li><a href="#">Moving to or from Phoenix</a></li>
												<li><a href="#">Moving to or from Portland</a></li>
												<li><a href="#">Moving to or from San Diego</a></li>
												<li><a href="#">Moving to or from San Francisco</a></li>
												<li><a href="#">Moving to or from San Jose</a></li>
												<li><a href="#">Moving to or from Seattle</a></li>
												<li><a href="#">Moving to or from Temecula</a></li>
												<li><a href="#">Moving to or from Visalia</a></li>
												<li><a href="#">Moving to or from Washington D.C.</a></li>
											</ul>
										</li>
										<li><a href="#">Blog</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
									<!-- /.navbar-nav -->
									<div id="top-phone">
										<a href="tel:<?php the_field('phone_number_general_cta', 'options'); ?>"><span class="icon-phone"></span> <?php the_field('phone_number_general_cta', 'options'); ?></a>
									</div>
									<!-- /#top-phone -->
									<div id="top-search">
										<a href="#"><span class="icon-search"></span></a>
									</div>
									<!-- /#top-search -->
									<div id="top__mobile">
										<a href="javascript:;" class="menu-btn">
											<span></span>
											<span></span>
											<span></span>
										</a>
									</div>
									<!-- /#top__mobile -->
								</div>
								<!-- /.navbar-collapse -->
							</nav>
							<!-- /.mainmenu -->
						</div>
						<!-- /.col-md-12 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.continer -->
			</div>
			<!-- /#menu-wrapper -->
		</div>
		<!-- // desktop menu  --> 		