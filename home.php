<?php get_header(); ?>

    <header id="inner-header" class="parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php the_field('custom_title_blog_heade', get_option('page_for_posts')); ?></h1>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </header>
    
    <div id="blogs">
        <div class="blog-items section-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <?php
                            $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // get current page number
                            $args = array(
                                'posts_per_page' => 10, // the value from Settings > Reading by default
                                'paged'          => $current_page // current page
                            );
                            query_posts( $args );
                            
                            $wp_query->is_archive = true;
                            $wp_query->is_home = false;
                            
                            while(have_posts()): the_post(); ?>
                                                
                                <div class="blog-item">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="blog-photo">
                                                <a href="<?php echo get_permalink(); ?>">
                                                    <?php
                                                    $imageID = get_field('featured_image_blog');
                                                    $image = wp_get_attachment_image_src( $imageID, 'large' );
                                                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                                    ?> 

                                                    <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                                    <i class="fal fa-image"></i>
                                                </a>
                                            </div>
                                            <!-- /.blog-photo-->
                                        </div>
                                        <!-- /.col-md-5 -->
                                        <div class="col-md-7">
                                            <div class="blog-content">
                                                <div class="blog-meta">
                                                    <span>
                                                        <?php
                                                        global $post;
                                                        $categories = get_the_category($post->ID);
                                                        $cat_link = get_category_link($categories[0]->cat_ID);
                                                        echo '<a href="'.$cat_link.'">'.$categories[0]->cat_name.'</a>' 
                                                        ?>                                                       
                                                    </span> 
                                                </div>
                                                <!-- /.category -->
                                                <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                <?php the_field('excerpt_text'); ?>
                                                <a href="<?php echo get_permalink(); ?>" class="read-more">Read More</a>
                                            </div>
                                            <!-- /.blog-content -->
                                        </div>
                                        <!-- /.col-md-7 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- // item  -->                                            
                                    
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
        <!-- /.blog-items -->
    </div>
    <!-- /#blogs -->

<?php get_footer(); ?>
