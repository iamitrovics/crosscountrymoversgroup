<?php
/**
 * The template for displaying search results pages
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<header id="search-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p><?php global $wp_query;
                echo $wp_query->found_posts.' results found.'; ?></p>
                <h1><?php echo get_search_query(); ?></h1>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</header>
<!-- /#search-header -->

<div id="search-result">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

				<?php if (!have_posts()): ?>

                    <div id="no-posts">
                        <img src="<?php bloginfo('template_directory'); ?>/img/ico/erows.png" alt="">
                        <h2>No posts found.</h2>

                        <p>Sorry, we found 0 posts for your search, Please try searching again.</p>
                    </div>

				<?php endif; ?>	

	       <?php
	          while(have_posts()): the_post();
	            ?>
	             

                <section class="sr-item">
                    <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_field('excerpt_text'); ?>
                    <div class="post-meta">
                        <ul>
                            <li><span class="icon-clock"></span><?php echo get_the_date( 'F j, Y' ); ?></li>
                        </ul>
                    </div>
                    <!-- /.post-meta -->
                </section>
                <!-- /.sr-item -->
	          
	        <?php endwhile; ?>

        
                <div class="custom-pager">
                    <div class="row">
                        <div class="col">
                            <div class="pager-nav">
                                <?php if( function_exists('wp_pagenavi') ) wp_pagenavi(); // WP-PageNavi function ?>
                            </div>
                            <!-- /.pager-nav -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.custom-pager -->

            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /#search-result -->

<?php
get_footer();
