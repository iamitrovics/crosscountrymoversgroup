<?php get_header(); ?>

<header id="inner-header" style="background-image:url(<?php bloginfo('template_directory'); ?>/img/bg/inner-header.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php single_cat_title('Category: '); ?>  	</h1>
                <div class="custom-breadcrumb">
                    <ul>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                        <li>Blogs</li>
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
<div id="blogs">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="blogs-list">

                    <?php while ( have_posts() ) : the_post(); ?>
                                            
                            <section class="blog-item">
                                <div class="blog-photo">
                                    <a href="<?php echo get_permalink(); ?>">
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
                                        <div class="blog-icon">
                                            <span class="icon-book"></span>
                                        </div>
                                        <!-- /.blog-icon -->
                                        <div class="blog-heading">
                                            <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                                            <div class="blog-meta">
                                                <ul>
                                                    <li><span class="icon-clock"></span><?php echo get_the_date( 'F j, Y' ); ?></li>
                                                    <li><span class="icon-user"></span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author_meta('display_name', $author_id); ?></a></li>
                                                </ul>
                                            </div>
                                            <!-- /.blog-meta -->
                                        </div>
                                        <!-- /.blog-heading -->
                                    </div>
                                    <!-- /.blog-info -->
                                    <div class="blog-text">
                                        <?php the_field('excerpt_text'); ?>
                                    </div>
                                    <!-- /.blog-text -->
                                    <div class="blog-action">
                                        <div class="like-btn">
                                            <a href="<?php echo get_permalink(); ?>"><span class="icon-heart"></span>Like</a>
                                        </div>
                                        <!-- /.like-btn -->
                                        <div class="readmore-btn">
                                            <a href="<?php echo get_permalink(); ?>">Read More</a>
                                        </div>
                                        <!-- /.readmore-btn -->
                                    </div>
                                    <!-- /.blog-action -->
                                </div>
                                <!-- /.blog-content -->
                                
                            </section>
                            <!-- /.blog-item -->                                        
                        
                        <?php endwhile; ?>


                 
                    <div class="custom-pager">
                        <?php if( function_exists('wp_pagenavi') ) wp_pagenavi(); // WP-PageNavi function ?>
                    </div>
                    <!-- /.custom-pager -->

                </div>
                <!-- /.blogs-list -->
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
<!-- /#blogs -->  

<?php get_footer(); ?>
