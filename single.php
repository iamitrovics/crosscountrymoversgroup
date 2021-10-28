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
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>blog">Blog</a></li>
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
                                            <li><span class="icon-folder-open"></span>
                                                <?php
                                                global $post;
                                                $categories = get_the_category($post->ID);
                                                $cat_link = get_category_link($categories[0]->cat_ID);
                                                echo '<a href="'.$cat_link.'">'.$categories[0]->cat_name.'</a>' 
                                                ?>                                        
                                            </li>
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

                                    <?php elseif( get_row_layout() == 'quote_cta' ): ?>

                                        <div class="quote-cta--single">
                                            <span class="title"><?php the_sub_field('cta_title'); ?></span>
                                            <a href="#bottom-form" class="btn-cta"><?php the_sub_field('button_label'); ?></a>
                                        </div>
                                        <!-- // single  --> 
                                        
                                    <?php elseif( get_row_layout() == 'featured_article' ): ?>    
                                        <?php
                                            $post_objects = get_sub_field('featured_article_list');

                                            if( $post_objects ): ?>
                                                <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                                                    <?php setup_postdata($post); ?>
                                                        
                                                    <div class="featured-article">
                                                        <section class="blog-item">
                                                            <div class="blog-photo">
                                                                <a href="<?php echo get_permalink(); ?>" target="_blank">
                                                                    <?php
                                                                    $imageID = get_field('featured_image_blog');
                                                                    $image = wp_get_attachment_image_src( $imageID, 'blog-image' );
                                                                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                                                    ?> 

                                                                    <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                                                </a>
                                                            </div>
                                                            <!-- /.blog-photo -->
                                                            <div class="blog-content">
                                                                <div class="blog-info">
                                                                    <div class="blog-heading">
                                                                        <a href="<?php echo get_permalink(); ?>" target="_blank"><h3><?php the_title(); ?></h3></a>
                                                                        <div class="readmore-btn">
                                                                            <a href="<?php echo get_permalink(); ?>" target="_blank">Read More</a>
                                                                        </div>
                                                                    <!-- /.readmore-btn -->
                                                                    </div>
                                                                    <!-- /.blog-heading -->
                                                                </div>
                                                                <!-- /.blog-info -->
                                                            </div>
                                                            <!-- /.blog-content -->
                                                            
                                                        </section>
                                                        <!-- /.blog-item --> 
                                                    </div>
                                                    <!-- /.featured-article -->
                                                        
                                                <?php endforeach; ?>
                                            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                        <?php endif; ?>
                                        <?php wp_reset_postdata(); ?>

                                    <?php elseif( get_row_layout() == 'services_module' ): ?>

                                        <section id="whatwedo" class="service-module">
                                            <div class="row wwd-items">

                                                <?php
                                                    $post_objects = get_sub_field('services_list_blog_page');

                                                    if( $post_objects ): ?>
                                                        <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                                                            <?php setup_postdata($post); ?>

                                                            <div class="col-lg-4">
                                                                <div class="wwd-item">
                                                                    <div class="wwd-item-in">
                                                                        <span class="wwd-icon"><?php the_field('icon_code_single_city'); ?></span>
                                                                        <h4><?php the_title(); ?></h4>
                                                                        <?php the_field('short_description_serv'); ?>
                                                                        <a href="<?php echo get_permalink(); ?>" target="_blank" class="readmore">Read More</a>
                                                                    </div>
                                                                    <!-- /.wwd-item-in -->
                                                                </div>
                                                                <!-- /.wwd-item -->
                                                            </div>
                                                            <!-- /.col-lg-4 -->

                                                            <?php endforeach; ?>
                                                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                                <?php endif; ?>

                                            </div>
                                            <!-- /.row -->
                                        </section>
                                        <!-- /#whatwedo -->

                                    <?php elseif( get_row_layout() == 'table' ): ?>

                                        <table style="width:100%" class="single-table">
                                            <thead>
                                                <tr role="row">
                                                <?php
                                                    // check if the repeater field has rows of data
                                                    if(have_rows('table_head_cells')):
                                                        // loop through the rows of data
                                                        while(have_rows('table_head_cells')) : the_row();
                                                            $hlabel = get_sub_field('table_cell_label_thead');
                                                            ?>  
                                                            <th tabindex="0" rowspan="1" colspan="1"><?php echo $hlabel; ?></th>
                                                        <?php endwhile;
                                                    else :
                                                        echo 'No data';
                                                    endif;
                                                    ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php while ( have_posts() ) : the_post(); ?>
                                                <?php 
                                                // check for rows (parent repeater)
                                                if( have_rows('table_body_row') ): ?>   
                                                    <?php 
                                                    // loop through rows (parent repeater)
                                                    while( have_rows('table_body_row') ): the_row(); ?>
                                                            <?php 
                                                            // check for rows (sub repeater)
                                                            if( have_rows('table_body_cells') ): ?>
                                                                <tr>
                                                                    <?php 
                                                                    // loop through rows (sub repeater)
                                                                    while( have_rows('table_body_cells') ): the_row();
                                                                        ?>
                                                                        <td><?php the_sub_field('table_cell_label_tbody'); ?></td>
                                                                    <?php endwhile; ?>
                                                                </tr>
                                                            <?php endif; //if( get_sub_field('') ): ?>
                                                    <?php endwhile; // while( has_sub_field('') ): ?>
                                                <?php endif; // if( get_field('') ): ?>
                                                <?php endwhile; // end of the loop. ?>
                                            </tbody>
                                        </table>

                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>                            
                        </div>
                        <!-- /.blog-content -->

                        <div class="author-desc">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 60 ); ?>
                            <div class="author-content">
                                <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
                                <p><?php the_author_description(); ?></p>
                            </div>
                            <!-- /.author-content -->
                        </div>

                        <div id="bottom-form">
                            
                            <?php include(TEMPLATEPATH . '/inc/inc_quote_form.php'); ?>

                        </div>
                        <!-- /.blog-share -->

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
                                    <h6><?php previous_post_link( '%link', '< %title', TRUE ); ?> </h6>
                                </div>
                                <div class="col-lg-6 nav-direction nav-next">
                                    <h6><?php next_post_link( '%link', '%title >', TRUE ); ?> </h6>
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

                            <form role="search" method="get" id="searchform"
                                class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <div>
                                    <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
                                    <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Enter search keyword here..." />
                                    <button type="submit"><span class="icon-search"></span></button>

                                </div>
                            </form>   

                        </div>
                        <!-- /.blog-search -->
                    </div>
                    <!-- /.sidebar-box -->
                    <div class="sidebar-box">
                        <h3>Recent Posts</h3>
                        <div class="sidebar-posts-list">

								<?php
								$loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3) ); ?>  
								<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                                    <div class="sidebar-post">
                                        <div class="post-photo">
									        <a href="<?php echo get_permalink(); ?>">
												<?php
												$imageID = get_field('featured_image_blog');
												$image = wp_get_attachment_image_src( $imageID, 'large' );
												$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
												?> 

												<img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 												
											</a>
                                        </div>
                                        <!-- /.post-photo -->
                                        <div class="post-content">
                                            <span class="post-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></span>
                                            <div class="date">
                                                <span class="icon-clock"></span> <?php echo get_the_date( 'F j, Y' ); ?>
                                            </div>
                                            <!-- /.date -->
                                        </div>
                                        <!-- /.post-content -->
                                    </div>
                                    <!-- /.sidebar-post -->

								<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>    
                                <?php wp_reset_query(); ?>

                        </div>
                        <!-- /.sidebar-posts-list -->
                    </div>
                    <!-- /.sidebar-box -->

                    <div class="sidebar-box">
                        <h3>Related Posts</h3>
                        <div class="sidebar-posts-list">

                            <?php
                                $categories =   get_the_category();
                                // print_r($categories);
                                $rp_query   =  new WP_Query ([
                                    'posts_per_page'        =>  3,
                                    'post__not_in'          =>  [ $post->ID ],
                                    'cat'                   =>  !empty($categories) ? $categories[0]->term_id : null,

                                ]);

                                if ( $rp_query->have_posts() ) {
                                    while( $rp_query->have_posts() ) {
                                        $rp_query->the_post();
                                        ?>

                                    <div class="sidebar-post">
                                        <div class="post-photo">
									        <a href="<?php echo get_permalink(); ?>">
												<?php
												$imageID = get_field('featured_image_blog');
												$image = wp_get_attachment_image_src( $imageID, 'large' );
												$alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
												?> 

												<img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 												
											</a>
                                        </div>
                                        <!-- /.post-photo -->
                                        <div class="post-content">
                                            <span class="post-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></span>
                                            <div class="date">
                                                <span class="icon-clock"></span> <?php echo get_the_date( 'F j, Y' ); ?>
                                            </div>
                                            <!-- /.date -->
                                        </div>
                                        <!-- /.post-content -->
                                    </div>
                                    <!-- /.sidebar-post -->

                                    <?php
                                        }

                                        wp_reset_postdata();

                                    }

                                ?>

                        </div>
                        <!-- /.sidebar-posts-list -->
                    </div>
                    <!-- /.sidebar-box -->

                    <div class="sidebar-box">
                        <h3>Categories</h3>
                        <div class="blog-categories">


                        <ul>
                            <?php wp_list_categories( array(
                                'orderby'    => 'name',
                                'show_count' => false,
                                'title_li' => '',
                            ) ); ?> 
                        </ul>    
            
                        </div>
                        <!-- /.blog-categories -->
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
