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

	<div class="menu-overlay"></div>

	<div class="main-menu-sidebar visible-xs visible-sm visible-md" id="menu">

		<header>
			<a href="javascript:;" class="close-menu-btn"><i class="fal fa-times"></i></a>
		</header>
		<!-- // header  -->

		<nav id="sidebar-menu-wrapper">
			<div id="menu">    
				<ul class="nav-links">
					<?php
					wp_nav_menu( array(
						'menu'              => 'primary',
						'theme_location'    => 'primary',
						'depth'             => 2,
						'container'         => false,
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => false,
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'items_wrap' => '%3$s',
						'walker'            => new wp_bootstrap_navwalkermobile())
					);
					?>  
				</ul>
			</div>
			<!-- // menu  -->

		</nav> 
		<!-- // sidebar menu wrapper  -->

	</div>
	<!-- // main menu sidebar  -->	

	<div id="menu_area" class="menu-area">

		<?php if ( get_field( 'display_settings_top_notice', 'options' ) ): ?>
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
								<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php the_field('website_logo_branding', 'options'); ?>" alt="<?php bloginfo('name'); ?>"></a>
								<!-- /.navbar-brand -->
								<div class="collapse navbar-collapse">
									<ul class="navbar-nav ml-auto">

										<?php if( have_rows('menu_items_header_main', 'options') ): ?>
											<?php while( have_rows('menu_items_header_main', 'options') ): the_row(); ?>

												<?php if (get_sub_field('link_type') == 'Single Item') { ?>
													<li><a href="<?php the_sub_field('link_to_page'); ?>"><?php the_sub_field('item_label'); ?></a></li>
												<?php } elseif (get_sub_field('link_type') == 'Dropdown') { ?>
													<li class="dropdown">
														<a class="dropdown-toggle" href="<?php the_sub_field('link_to_page'); ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php the_sub_field('item_label'); ?></a>
														<ul class="dropdown-menu fade">
															<?php if( have_rows('dropdown_items') ): ?>
																<?php while( have_rows('dropdown_items') ): the_row(); ?>

																	<li><a href="<?php the_sub_field('link_to_page'); ?>"><?php the_sub_field('label'); ?></a></li>

																<?php endwhile; ?>
															<?php endif; ?>
														</ul>
													</li>
												<?php } elseif (get_sub_field('link_type') == 'Dropdown Multilevel') { ?>
													<li class="nav-item dropdown mega-dropdown">
														<a class="dropdown-toggle" href="<?php the_sub_field('link_to_page'); ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<?php the_sub_field('item_label'); ?></a>
														<ul class="dropdown-menu mega-dropdown-menu fade">
															<div class="row">
																<?php if( have_rows('dropdown_columns') ): ?>
																	<?php while( have_rows('dropdown_columns') ): the_row(); ?>

																		<div class="col">
																			<div class="dropdown__col">
																				<span class="dropdown__title"><a href="<?php the_sub_field('column_link'); ?>"><?php the_sub_field('column_title'); ?></a></span>
																				<ul>
																					<?php if( have_rows('dropdown_items') ): ?>
																						<?php while( have_rows('dropdown_items') ): the_row(); ?>

																							<li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('label'); ?></a></li>

																						<?php endwhile; ?>
																					<?php endif; ?>
 																					
																				</ul>
																			</div>
																		</div>

																	<?php endwhile; ?>
																<?php endif; ?>

															</div>
														</ul>
													</li>
												<?php } ?>   

											<?php endwhile; ?>
										<?php endif; ?>
						
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