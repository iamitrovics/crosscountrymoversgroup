<?php
/**
 * The template for displaying all single posts
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
                    <h1><?php the_title(); ?></h1>
                    <div class="custom-breadcrumb">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Moving</a></li>
                            <li>The Ultimate Moving to a Tiny House Checklist</li>
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

    <div id="blog-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="blog-body">

                        <div class="blog-photo">
                            <?php
                            $imageID = get_field('featured_image_blog');
                            $image = wp_get_attachment_image_src( $imageID, 'blog-image' );
                            $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                            ?> 

                            <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                        </div>
                        <!-- /.blog-photo -->

                        <div class="blog-content">
                            <div class="blog-info">
                                <div class="blog-icon">
                                    <span class="icon-book"></span>
                                </div>
                                <!-- /.blog-icon -->
                                <div class="blog-heading">
                                    <h2><a href="#"><?php the_title(); ?></a></h2>
                                    <div class="blog-meta">
                                        <ul>
                                            <li><span class="icon-clock"></span><?php echo get_the_date( 'F j, Y' ); ?></li>
                                            <li><span class="icon-user"></span><a href="#">Amelia Russell</a></li>
                                            <li><span class="icon-folder-open"></span><a href="#">moving</a></li>
                                        </ul>
                                    </div>
                                    <!-- /.blog-meta -->
                                </div>
                                <!-- /.blog-heading -->
                            </div>
                            <!-- /.blog-info -->

                            <?php if( have_rows('content_layout_blog') ): ?>
                                <?php while( have_rows('content_layout_blog') ): the_row(); ?>
                                    <?php if( get_row_layout() == 'intro_text' ): ?>

                                        <div class="intro-text">
                                            <?php the_sub_field('intro_content'); ?>
                                        </div>

                                    <?php elseif( get_row_layout() == 'full_width_content' ): ?>

                                        <div class="blog-text">

                                            <?php the_sub_field('content_block'); ?>

                                        </div>
                                        <!-- /.blog-text -->                                    

                                    <?php elseif( get_row_layout() == 'full_width_image' ): ?>

                                        <div class="featured-photo">
                                            <?php
                                            $imageID = get_sub_field('featured_image');
                                            $image = wp_get_attachment_image_src( $imageID, 'half-image' );
                                            $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                            ?> 

                                            <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                            <div class="caption"><?php the_sub_field('image_caption'); ?></div>
                                        </div>                                    

                                    <?php elseif( get_row_layout() == 'video' ): ?>

                                        <div class="video-holder">
                                            <?php the_sub_field('embedded_code'); ?>
                                        </div>

                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>                            



                        </div>
                        <!-- /.blog-content -->
                        <div class="blog-share">
                            <span class="icon-share"></span> <span class="share-caption">Share this post on:</span>
                            <div class="share-btns">
                                <ul>
                                    <li><a href="#" class="share-fb"><span class="share-num">0</span><span class="icon-facebook"></span></a></li>
                                    <li><a href="#" class="share-tw"><span class="share-num">0</span><span class="icon-twitter"></span></a></li>
                                    <li><a href="#" class="share-gp"><span class="share-num">0</span><span class="icon-google-plus"></span></a></li>
                                </ul>
                            </div>
                            <!-- /.share-btns -->
                        </div>
                        <!-- /.blog-share -->
                        <div class="blog-nav">
                            <div class="row">
                                <div class="col-lg-6 nav-direction nav-previous">
                                    <a href="#">
                                        <span class="meta-nav">← Previous post</span>
                                        <span class="nav-title">How to Move Efficiently and Pack Like a Pro</span>
                                    </a>
                                </div>
                                <div class="col-lg-6 nav-direction nav-next">
                                    <a href="#">
                                        <span class="meta-nav">Next post →</span>
                                        <span class="nav-title">How to Move Efficiently and Pack Like a Pro</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /.blog-nav -->  
                    </div>
                    <!-- /.blogs-body -->
                </div>
                <!-- /.col-lg-9 -->
                <div class="col-lg-3">
                    <div class="blog-sidebar">
                        <div class="sidebar-box">
                            <h3>Blog Search</h3>
                            <div class="blog-search">
                                <form action="#">
                                    <input type="text"  value="" name="s" placeholder="Enter search keyword here...">
                                    <button type="submit"><span class="icon-search"></span></button>
                                </form>
                            </div>
                            <!-- /.blog-search -->
                        </div>
                        <!-- /.sidebar-box -->
                        <div class="sidebar-box">
                            <h3>Recent Posts</h3>
                            <div class="sidebar-posts-list">
                                <div class="sidebar-post">
                                    <div class="post-photo">
                                        <a href="#"><img src="img/misc/blog-photo.jpeg" alt=""></a>
                                    </div>
                                    <!-- /.post-photo -->
                                    <div class="post-content">
                                        <span class="post-title"><a href="#">How to Move Efficiently and Pack Like a Pro</a></span>
                                        <div class="date">
                                            <span class="icon-clock"></span> February 7, 2021
                                        </div>
                                        <!-- /.date -->
                                        <div class="comments">
                                            <span class="icon-bubbles"></span> Comments Off
                                        </div>
                                        <!-- /.comments -->
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!-- /.sidebar-post -->
                                <div class="sidebar-post">
                                    <div class="post-photo">
                                        <a href="#"><img src="img/misc/blog-photo.jpeg" alt=""></a>
                                    </div>
                                    <!-- /.post-photo -->
                                    <div class="post-content">
                                        <span class="post-title"><a href="#">How to Move Efficiently and Pack Like a Pro</a></span>
                                        <div class="date">
                                            <span class="icon-clock"></span> February 7, 2021
                                        </div>
                                        <!-- /.date -->
                                        <div class="comments">
                                            <span class="icon-bubbles"></span> Comments Off
                                        </div>
                                        <!-- /.comments -->
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!-- /.sidebar-post -->
                                <div class="sidebar-post">
                                    <div class="post-photo">
                                        <a href="#"><img src="img/misc/blog-photo.jpeg" alt=""></a>
                                    </div>
                                    <!-- /.post-photo -->
                                    <div class="post-content">
                                        <span class="post-title"><a href="#">How to Move Efficiently and Pack Like a Pro</a></span>
                                        <div class="date">
                                            <span class="icon-clock"></span> February 7, 2021
                                        </div>
                                        <!-- /.date -->
                                        <div class="comments">
                                            <span class="icon-bubbles"></span> Comments Off
                                        </div>
                                        <!-- /.comments -->
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!-- /.sidebar-post -->
                            </div>
                            <!-- /.sidebar-posts-list -->
                        </div>
                        <!-- /.sidebar-box -->
                        <div class="sidebar-box">
                            <h3>Categories</h3>
                            <div class="blog-categories">
                                <ul>
                                    <li><a href="#">Blog</a>(30)</li>
                                    <li><a href="#">Cross Country Moving</a>(18)</li>
                                    <li><a href="#">moving</a>(49)</li>
                                    <li><a href="#">Uncategorized</a>(6)</li>
                                </ul>
                            </div>
                            <!-- /.blog-categories -->
                        </div>
                        <!-- /.sidebar-box -->
                        <div class="sidebar-box">
                            <div class="blog-tags">
                                <h3>Tag Cloud</h3>
                                <ul>
                                    <li><a href="#" data-hover="Auto Transport">Auto Transport</a></li>
                                    <li><a href="#" data-hover="Car Shipping">Car Shipping</a></li>
                                    <li><a href="#" data-hover="Cross Country">cross country</a></li>
                                    <li><a href="#" data-hover="Long Distance">Long Distance</a></li>
                                    <li><a href="#" data-hover="Moving">Moving</a></li>
                                    <li><a href="#" data-hover="Moving To Different State">Moving To Different State</a></li>
                                    <li><a href="#" data-hover="Packing">Packing</a></li>
                                    <li><a href="#" data-hover="Shipping Boxes">Shipping Boxes</a></li>
                                </ul>
                            </div>
                            <!-- /.blog-tags -->
                        </div>
                        <!-- /.sidebar-box -->
                    </div>
                    <!-- /.blog-sidebar -->
                </div>
                <!-- /.col-lg-3 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#blog-single -->  
   
<?php
get_footer();
