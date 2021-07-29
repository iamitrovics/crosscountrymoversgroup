<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<header id="inner-header" style="background-image:url(<?php bloginfo('template_directory'); ?>/img/bg/inner-header.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php the_field('header_title_ermac', 'options'); ?></h1>
                <div class="custom-breadcrumb">
                    <ul>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                        <li>404</li>
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
                <div id="error-page">
                    <div class="not-found-content">
                        <div class="not-found-big"><?php the_field('big_title_ermac', 'options'); ?> <i></i></div>
                        <div class="not-found-text">
                            <p><?php the_field('small_title_ermac', 'options'); ?></p>
                            <p><?php the_field('subtitle_ermac', 'options'); ?></p>
                        </div>
                        <!-- /.not-found-text -->
                    </div>
                    <!-- /.not-found-content -->
                    <div class="not-found-form">
                        <?php the_field('search_title_ermac', 'options'); ?>

                            <form role="search" method="get" id="searchform"
                                class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <div>
                                    <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
                                    <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Enter search keyword here..." />
                                    <button type="submit"><span class="icon-search"></span></button>

                                </div>
                            </form>                        
                        
                        <?php the_field('subtext_ermac', 'options'); ?>
                    </div>
                    <!-- /.not-found-form -->
                </div>
                <!-- /#error-page -->
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
